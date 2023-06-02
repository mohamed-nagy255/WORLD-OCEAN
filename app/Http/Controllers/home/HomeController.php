<?php

namespace App\Http\Controllers\home;

use App\Models\Seo;
use App\Models\Offer;
use App\Models\Slide;
use App\Models\country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index () {
        $meta = Seo::find(1);
        $sliders = Slide::all();
        $countries = country::latest() -> take(8) -> get();
        $offers = Offer::where('spcial', 1) -> latest() -> take(8) -> get();
        return view('front-end.index', compact('sliders', 'countries', 'meta', 'offers'));
    }
}
