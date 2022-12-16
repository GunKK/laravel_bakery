<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    public function index() {
        $slides = Slide::paginate(5);
        return view('Backend.Slides.index', compact('slides'));
    }

    public function create() {
        return view('Backend.Slides.add');
    }

    public function store(Request $req) {
        if ($req->hasFile('image')) {
            $slide = new Slide();
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('addSlide')->with('Error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('Frontend/image/slide/'), $fileName);
            $slide->link = $fileName;
            $slide->image = $fileName;
            $slide->save();
            return redirect()->route('slide')->with("notify", "Thêm mới thành công");
        } else {
            return redirect()->route('addSlide')->with('Error','Lỗi file ảnh');
        }
    }

    public function edit($id) {
        $slide = Slide::find($id);
        return view('Backend.Slides.edit', compact('slide'));
    }

    public function update(Request $req ,$id) {
        if ($req->hasFile('image')) {
            $slide = Slide::find($id);
            $link = $slide->image;
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('updateSlide', ['id'=>$id])->with('error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }
            // delete old
            $imagePath = "Frontend/image/slide/".$link; 
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            // create new 
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('Frontend/image/slide/'), $fileName);
            $slide->link = $fileName;
            $slide->image = $fileName;
            $slide->save();
            return redirect()->route('slide')->with("notify", "Cập nhật thành công");
        } else {
            return redirect()->route('updateSlide',['id'=>$id])->with('error','Lỗi file ảnh');
        }
    }

    public function destroy($id) {
        $slide = Slide::find($id);
        $imgPath = "Frontend/image/slide/".$slide->image;
        if (File::exists($imgPath)) {
            File::delete($imgPath);
        }
        return redirect()->route('slide')->with('notify','Xóa thành công');
    }
}
