<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('back-end.categories.index', compact('categories'));
    }

    public function store (request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:categories',
            'image' => 'required|max:5024',
        ],[
            'name.required' => 'برجاء ادخال اسم الفئة',
            'name.uniqe' => 'اسم المدينه موجود بالفعل',
            'image.required' => 'برجاء ادخال صورة الفئة',
            'image.max' => 'max:5024',
        ]);

        $newImageName = $request -> name . '-' . time() . '.' . $request -> image -> extension() . '.webp';
        $compressImage = Image::make($request -> image);
        $compressImage -> save(public_path('assets/front-end/images/categories/') . $newImageName, 20);
        
        $category = Category::create([
            'name' => $request -> name,
            'image' => $newImageName,
        ]);

        return redirect()->back()->with('add', 'تم اضافة الفئة بنجاح');
    }

    public function update (request $request) {
        $id = $request -> id;
        $validated = $request->validate([
            'name' => 'required|unique:categories,name,'.$id,
            'image' => 'required|max:5024',
        ],[
            'name.required' => 'برجاء ادخال اسم الفئة',
            'name.uniqe' => 'اسم المدينه موجود بالفعل',
            'image.required' => 'برجاء ادخال صورة الفئة',
            'image.max' => 'max:5024',
        ]);

       $category = Category::find($id);
       $category -> name = $request -> name;
       if ($request -> image == $category -> image ) {
            $category -> image = $request -> image;
        } else {
            $image_path = public_path("assets/front-end/images/categories//") .$category->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $newImageName = $request -> name . '-' . time() . '.' . $request -> image -> extension() . '.webp';
            $compressImage = Image::make($request -> image);
            $compressImage -> save(public_path('assets/front-end/images/categories/') . $newImageName, 20);
            $category -> image = $newImageName;
        }
        $category -> save();
        return redirect()->back()->with('edit', 'تم تعديل الفئة بنجاح');
    }

    public function destroy (request $request) {
        $id = $request -> id;
        $category = Category::find($id);
        $image_path = public_path("assets/front-end/images/categories//") .$category->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        else{
            $category->delete();
        }
        $category->delete();
        return redirect()->back()->with('del', 'تم حذف الفئة بنجاح');
    }
}
