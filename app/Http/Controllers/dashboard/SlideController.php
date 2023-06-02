<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{
    public function index () {
        $slides = Slide::all();
        $count = Slide::count();
        return view('back-end.slides.index', compact('slides', 'count'));
    }

    public function store (request $request) {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:5024',
        ],[
            'image.required' => 'برجاء ادخال العنوان الصورة',
            'image.mimes' => 'png,jpg,jpeg يجب ان يكون امتداد الصورة ',
        ]);

        $newImageName = 'slider' . '-' . time() . '.' .  $request -> image -> extension() . '.webp';
        $compressImage = Image::make($request -> image);
        $compressImage -> save(public_path('assets/front-end/images/') . $newImageName, 20);  

        $slide = Slide::create([
            'image' => $newImageName,
        ]);
 
        return redirect()->back()->with('add', 'تم الاضافة بنجاح');
    }   

    public function distroy (int $slid_id) {
        $slide = Slide::find($slid_id);
        $image_path = public_path("assets/front-end/images//") .$slide->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        else{
            $slide->delete();
        }
        $slide->delete();
        return redirect()->back()->with('del', 'تم الحذف بنجاح');
    }
}
