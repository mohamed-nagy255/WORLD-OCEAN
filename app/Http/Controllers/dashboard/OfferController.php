<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Day;
use App\Models\Offer;
use App\Models\country;
use App\Models\Category;
use App\Models\proprety;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class OfferController extends Controller
{
    //Index page
    public function index () {
        $offers = Offer::all('name', 'country_id', 'category_id', 'spcial', 'id');
        return view('back-end.offers.index', compact('offers'));
    }

    //Create Page
    public function create () {
        $countries = country::all();
        $categories = Category::all();
        return view('back-end.offers.create', compact('countries', 'categories'));
    }

    //Insert Offers
    public function store (request $request) {
        // return $request;
        $validated = $request->validate([
            'name' => 'required|unique:offers',
            'day_cont' => 'required',
            'price' => 'required',
            'image' => 'required|max:5024',
            'spcial' => 'required',
            'country_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name_day' => 'nullable',
            'description' => 'nullable',
            'name_proprety' => 'nullable',
        ],[
            'name.required' => 'برجاء كتابة اسم العرض',
            'name.unique' => ' اسم العرض موجود بالفعل',
            'day_cont.required' => 'برجاء ادخال عدد الايام',
            'price.required' => 'برجاء ادخال السعر للفرد',
            'image.required' => 'برجاء اختيار صورة العرض',
            'image.max' => 'برجاء اختيار صورة لا تزيد عن 5 ميجا',
            'spcial.required' => 'برجاء اختيار نوع العرض',
            'country_id.integer' => 'برجاء اختيار المدينة التابعة للعرض',
            'country_id.required' => 'برجاء اختيار المدينة التابعة للعرض',
            'category_id.integer' => 'برجاء اختيار فئة العرض',
            'category_id.required' => 'برجاء اختيار فئة العرض',
        ]);

        //image Name and compress
        $newImageName = $request -> name . '-' . time() . '.webp';
        $compressImage = Image::make($request -> image);
        $compressImage -> save(public_path('assets/front-end/images/offers/') . $newImageName, 20);

        //Create
        $offer = Offer::create([
            'name' => $request -> name,
            'day_cont' => $request -> day_cont,
            'price' => $request -> price,
            'image' => $newImageName,
            'spcial' => $request -> spcial,
            'country_id' => $request -> country_id,
            'category_id' => $request -> category_id,
        ]);

        //offer Dayes
        if ($request->name_day && $request->description) {
            $nameDays = $request->name_day;
            $descriptions = $request->description;
            $offerDays = [];
        
            if (count($nameDays) === count($descriptions)) {
                for ($i = 0; $i < count($nameDays); $i++) {
                    $offerDays[] = [
                        'name_day' => $nameDays[$i],
                        'description' => $descriptions[$i],
                        'offer_id' => $offer->id,
                    ];
                }
            }
        
            if (!empty($offerDays)) {
                Day::insert($offerDays);
            }
        }

        //offer Proprties
        if ($request -> name_proprety) {
            foreach ($request -> name_proprety as $row) {
                proprety::create([
                   'name_proprety' => $row, 
                   'offer_id' => $offer->id, 
                ]);
            }
        }
        return redirect()->back()->with('add', 'تم اضافة العرض بنجاح');
    }

    //Edit Page
    public function edit (int $id) {
        $countries = country::all();
        $categories = Category::all();
        $offer_data = Offer::find($id);
        return view('back-end.offers.edit', compact('countries', 'categories', 'offer_data'));
    }

    //update data
    public function update (request $request) {
        
        $id = $request -> id;
        $validated = $request->validate([
            'name' => 'required|unique:offers,name,'.$id,
            'day_cont' => 'required',
            'price' => 'required',
            'image' => 'required|max:5024',
            'spcial' => 'required',
            'country_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name_day' => 'nullable',
            'description' => 'nullable',
            'name_proprety' => 'nullable',
        ],[
            'name.required' => 'برجاء كتابة اسم العرض',
            'name.unique' => ' اسم العرض موجود بالفعل',
            'day_cont.required' => 'برجاء ادخال عدد الايام',
            'price.required' => 'برجاء ادخال السعر للفرد',
            'image.required' => 'برجاء اختيار صورة العرض',
            'image.max' => 'برجاء اختيار صورة لا تزيد عن 5 ميجا',
            'spcial.required' => 'برجاء اختيار نوع العرض',
            'country_id.integer' => 'برجاء اختيار المدينة التابعة للعرض',
            'country_id.required' => 'برجاء اختيار المدينة التابعة للعرض',
            'category_id.integer' => 'برجاء اختيار فئة العرض',
            'category_id.required' => 'برجاء اختيار فئة العرض',
        ]);
        
        //update offer
        $offer = Offer::find($id);

        // Image
        if ($request -> image == $offer -> image) {
            $newImageName = $offer -> image;
        } else {
            $image_path = public_path("assets/front-end/images/offers//") .$offer->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $newImageName = $request -> name . '-' . time() . '.webp';
            $compressImage = Image::make($request -> image);
            $compressImage -> save(public_path('assets/front-end/images/offers/') . $newImageName, 20);
        }
        
        //Offer Data
        $offer -> name = $request -> name;
        $offer -> image = $newImageName;
        $offer -> day_cont = $request -> day_cont;
        $offer -> price = $request -> price;
        $offer -> spcial = $request -> spcial;
        $offer -> country_id = $request -> country_id;
        $offer -> category_id = $request -> category_id;
        $offer -> save();

        if ($request->name_day && $request->description) {
            $nameDays = $request->name_day;
            $descriptions = $request->description;
            $offerDays = [];
        
            if (count($nameDays) === count($descriptions)) {
                for ($i = 0; $i < count($nameDays); $i++) {
                    $offerDays[] = [
                        'name_day' => $nameDays[$i],
                        'description' => $descriptions[$i],
                        'offer_id' => $offer->id,
                    ];
                }
            }
        
            if (!empty($offerDays)) {
                $offer->days()->delete();
                
                Day::insert($offerDays);
            }
        }
        
        if ($request->name_proprety) {
            $namePropreties = $request->name_proprety;
            $offerPropreties = [];
            
            foreach ($namePropreties as $row) {
                $offerPropreties[] = [
                    'name_proprety' => $row,
                    'offer_id' => $offer->id,
                ];
            }
            
            $offer->proprety()->delete();
            
            proprety::insert($offerPropreties);
        }
        return redirect()->route('offer.index')->with('add', 'تم تعديل العرض بنجاح');
    }

    // delete Offer
    public function destroy (request $request) {
        $id = $request -> id;
        $offer = Offer::find($id);
        $image_path = public_path("assets/front-end/images/offers//") .$offer->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        else{
            $offer->delete();
        }
        $offer->delete();
        return redirect()->back()->with('del', 'تم حذف العرض بنجاح');
    }
}
