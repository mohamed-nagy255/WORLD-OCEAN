<?php

namespace App\Http\Controllers\dashboard;

use App\Models\country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class countrycontroller extends Controller
{
    public function index () {
        $countries = country::all();
        return view('back-end.countries.index', compact('countries'));
    }

    public function store (request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:countries',
            'image' => 'required|max:5024',
        ],[
            'name.required' => 'برجاء ادخال اسم المدينة',
            'name.uniqe' => 'اسم المدينه موجود بالفعل',
            'image.required' => 'برجاء ادخال صورة المدينة',
            'image.max' => 'max:5024',
        ]);

        $newImageName = $request -> name . '-' . time() . '.' . $request -> image -> extension() . '.webp';
        $compressImage = Image::make($request -> image);
        $compressImage -> save(public_path('assets/front-end/images/countries/') . $newImageName, 20);
        
        $country = country::create([
            'name' => $request -> name,
            'image' => $newImageName,
        ]);

        return redirect()->back()->with('add', 'تم اضافة المدينة بنجاح');
    }

    public function update (request $request) {
        $id = $request -> id;
        $validated = $request->validate([
            'name' => 'required|unique:countries,name,'.$id,
            'image' => 'required|max:5024',
        ],[
            'name.required' => 'برجاء ادخال اسم المدينة',
            'name.uniqe' => 'اسم المدينه موجود بالفعل',
            'image.required' => 'برجاء ادخال صورة المدينة',
            'image.max' => 'max:5024',
        ]);

       $country = Country::find($id);
       $country -> name = $request -> name;
       if ($request -> image == $country -> image ) {
            $country -> image = $request -> image;
        } else {
            $image_path = public_path("assets/front-end/images/countries//") .$country->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $newImageName = $request -> name . '-' . time() . '.' . $request -> image -> extension() . '.webp';
            $compressImage = Image::make($request -> image);
            $compressImage -> save(public_path('assets/front-end/images/countries/') . $newImageName, 20);
            $country -> image = $newImageName;
        }
        $country -> save();
        return redirect()->back()->with('edit', 'تم تعديل المدينة بنجاح');
    }

    public function destroy (request $request) {
        $id = $request -> id;
        $country = Country::find($id);
        $image_path = public_path("assets/front-end/images/countries//") .$country->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        else{
            $country->delete();
        }
        $country->delete();
        return redirect()->back()->with('del', 'تم حذف المدينة بنجاح');
    }
}
