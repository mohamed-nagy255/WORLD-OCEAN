<?php

namespace App\Http\Controllers\home;

use App\Models\Offer;
use App\Models\country;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index (string $name) {
        // return $name;
        $categories = Category::all();
        $country = country::where('name', $name) -> first();
        return view('front-end.categories', compact('categories', 'country'));
    }

    public function show (string $name, string $name_category) {

        $country = Country::where('name', $name)->first();
        $category = Category::where('name', $name_category)->first();

        if ($country && $category) {
            $offers = Offer::where('country_id', $country->id) 
            -> where('category_id', $category->id) -> paginate(12);
        }

        return view('front-end.offers', compact('offers', 'category'));
        
    }
}
