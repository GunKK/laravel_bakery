<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Bill_detail;
use App\Models\Customer;

class BillController extends Controller
{
    public function index() {
        $bills = Bill::paginate(5);
        return view('Backend.Bills.index', compact('bills'));
    }

    public function show($id) {
        $bill = Bill::find($id);
        $billDetails = Bill_detail::where('id_bill','=',$bill->id)->get();
        $customer = Customer::find($bill->id_customer);
        return view('Backend.Bills.show', compact('bill', 'customer', 'billDetails'));
    }

    public function update($id) {
        $bill = Bill::find($id);
        $billDetails = Bill_detail::where('id_bill','=',$bill->id)->get();
        $customer = Customer::find($bill->id_customer);
        return view('Backend.Bills.edit', compact('bill', 'customer', 'billDetails'));
    }

    public function edit(Request $req, $id) {
        $bill = Bill::find($id);
        $bill->status = $req->status;
        $bill->save();
        return redirect()->route('updateBill', ['id'=>$id])->with('success', 'Lưu thành công');
    }
}
