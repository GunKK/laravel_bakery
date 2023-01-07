<?php

namespace App\Http\Controllers;

use App\Models\Bill_detail;
use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(5);
        return view('Backend.Products.index', compact('products'));
    }

    public function show($id) {
        $product = Product::find($id);
        return view('Backend.Products.show', compact('product'));
    }

    public function create() {
        return view('Backend.Products.add');
    }

    public function store(Request $req) {
        $val = $req->validate(
            [
                'name'=>'required',
                'desc'=>'required | min:5 | max:1000',
                'price'=>'required | numeric',
                'pricePromotion'=>'required | numeric',
                'unit'=>'required',
                'new'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'desc.required'=>'Bạn chưa nhập tên mô tả',
                'desc.min'=>'Mô tả tối thiểu 5 kí tự',
                'desc.max'=>'Mô tả tối đa 1000 kí tự',
                'price.required'=>'Giá không được bỏ trống',
                'price.digits_between'=>'Giá phải là số',
                'pricePromotion.required'=>'Giá không được bỏ trống',
                'pricePromotion.digits_between'=>'Giá giảm phải là số',
                'unit.required'=>'Vui lòng chọn đơn vị tính',
                'new.required'=>'Vui lòng chọn sản phẩm mới'
            ]
        );        
        if($req->hasFile('image')) {
            $product = new Product();
            $product->name = $val['name'];
            $product->description = $val['desc'];
            $product->id_type = $req->productTypeId;
            $product->unit_price = $val['price'];
            $product->promotion_price = $val['pricePromotion'];
            $product->unit = $val['unit'];
            $product->new = $val['new'];
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('addProduct')->with('error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }
            $fileName = time().'.'.$ext;
            $file->move(public_path('Frontend/image/products/'), $fileName);
            $product->image = $fileName;
            $product->save();
            return redirect()->route('manageProduct')->with("notify", "Thêm mới thành công");
        } else {
            return redirect()->route('addProduct')->with('error', 'Lỗi file ảnh !!!');
        }
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('Backend.Products.edit', compact('product'));
    }

    public function update(Request $req, $id) {
        $val = $req->validate(
            [
                'name'=>'required',
                'desc'=>'required | min:5 | max:1000',
                'price'=>'required | numeric',
                'pricePromotion'=>'required | numeric',
                'unit'=>'required',
                'new'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'desc.required'=>'Bạn chưa nhập tên mô tả',
                'desc.min'=>'Mô tả tối thiểu 5 kí tự',
                'desc.max'=>'Mô tả tối đa 1000 kí tự',
                'price.required'=>'Giá không được bỏ trống',
                'price.digits_between'=>'Giá phải là số',
                'pricePromotion.required'=>'Giá không được bỏ trống',
                'pricePromotion.digits_between'=>'Giá giảm phải là số',
                'unit.required'=>'Vui lòng chọn đơn vị tính',
                'new.required'=>'Vui lòng chọn sản phẩm mới'
            ]
        );           
        if($req->hasFile('image')) {
            $product = Product::find($id);
            $link = $product->image;
            $product->name = $val['name'];
            $product->description = $val['desc'];
            $product->id_type = $req->productTypeId;
            $product->unit_price = $val['price'];
            $product->promotion_price = $val['pricePromotion'];
            $product->unit = $val['unit'];
            $product->new = $val['new'];
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('updateProduct',['id'=>$id])->with('error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }

            $imagePath = "Frontend/image/products/".$link; 
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $fileName = time().'.'.$ext;
            $file->move(public_path('Frontend/image/products/'), $fileName);
            $product->image = $fileName;
            $product->save();
            return redirect()->route('manageProduct')->with("notify", "Cập nhật thành công");
        } else {
            return redirect()->route('updateProduct',['id'=>$id])->with('error', 'Lỗi file ảnh !!!');
        }
    }

    public function destroy($id) {
        $product = Product::find($id);
        $billDetail = Bill_detail::where('id_product','=',$id)->get();
        // echo count($billDetail);
        if (count($billDetail) > 0) {
            return redirect()->route('manageProduct')->with('error', 'Sản phẩm đã có người mua, không thể xóa được');
        } else {
            $imgPath = "Frontend/image/products/".$product->image;
            if (File::exists($imgPath)) {
                File::delete($imgPath);
            }
            $product->delete();
            return redirect()->route('manageProduct')->with('notify', 'Xóa thành công');
        }
    }
}
