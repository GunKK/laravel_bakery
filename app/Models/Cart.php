<?php

namespace App\Models;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id) {
        $storedItem = ['qty'=> 0, 'price' => $item->unit_price, 'promotion_price' => $item->promotion_price, 'item'=> $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $priceItem = $item->promotion_price!=0 ? $item->promotion_price : $item->unit_price;
        $storedItem['price'] = $priceItem * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->promotion_price!=0 ? $item->promotion_price : $item->unit_price;
    }

    public function remove($id) {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function reduce($id) {
        $price = $this->items[$id]['price'] / $this->items[$id]['qty'];
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $price;
        
        if ($this->items[$id]['qty'] == 0) {
            unset($this->items[$id]);
        }
    }

    public function update($action, $id) {
        switch ($action) {
            case 'add':
                $this->add($this->items, $id);
                break;
            case'remove':
                $this->reduce($this->items, $id);
                break;
        }
    }
}