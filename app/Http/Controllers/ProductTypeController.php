<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductTypeController extends Controller
{
    public function index() {
        $productTypes = Product_type::paginate(4); 
        return view('Backend.ProductTypes.index', compact('productTypes'));
    }

    public function create() {
        return view('Backend.ProductTypes.add');
    }

    public function store(Request $req) {
        $val = $req->validate(
            [
                'name'=>'required',
                'desc'=>'required | min:5 | max:1000',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'desc.required'=>'Bạn chưa nhập tên mô tả',
                'desc.min'=>'Mô tả tối thiểu 5 kí tự',
                'desc.max'=>'Mô tả tối đa 1000 kí tự',
            ]
        );

        if($req->hasFile('image')) {
            $productType = new Product_type();
            $productType->name = $val['name'];
            $productType->description = $val['desc'];
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('addProductType')->with('error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }
            $fileName = time().'.'.$ext;
            $file->move(public_path('Frontend/image/product_types/'), $fileName);
            $productType->image = $fileName;
            $productType->save();
            return redirect()->route('manageProductType')->with("notify", "Thêm mới thành công");
        } else {
            return redirect()->route('addProduct')->with('error', 'Lỗi file ảnh !!!');
        }
    }

    public function edit($id) {
        $productType = Product_type::find($id);
        return view('Backend.ProductTypes.edit', compact('productType'));
    }

    public function update(Request $req, $id) {
        $val = $req->validate(
            [
                'name'=>'required',
                'desc'=>'required | min:5 | max:1000',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'desc.required'=>'Bạn chưa nhập tên mô tả',
                'desc.min'=>'Mô tả tối thiểu 5 kí tự',
                'desc.max'=>'Mô tả tối đa 1000 kí tự',
            ]
        );

        if($req->hasFile('image')) {
            $productType = Product_type::find($id);
            $productType->name = $val['name'];
            $productType->description = $val['desc'];
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('updateProductType', ['id'=>$id])->with('error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }
            $fileName = time().'.'.$ext;
            $file->move(public_path('Frontend/image/product_types/'), $fileName);
            $productType->image = $fileName;
            $productType->save();
            return redirect()->route('updateProductType', ['id'=>$id])->with("notify", "Lưu thành công");
        } else {
            return redirect()->route('updateProductType', ['id'=>$id])->with('error', 'Lỗi file ảnh !!!');
        }
    }

    public function destroy($id) {
        $productType = Product_type::find($id);

        // dd($productType->product->count());
        if ($productType->product->count() > 0) {
            return redirect()->route('manageProductType')->with('error', 'Loại sản phẩm có sản phẩm, yêu cầu xóa thất bại');
        } else {
            $imgPath = "Frontend/image/product_types/".$productType->image;
            if (File::exists($imgPath)) {
                File::delete($imgPath);
            }
            $productType->delete();
            return redirect()->route('manageProductType')->with('notify', 'Xóa thành công');
        }
    }

}
