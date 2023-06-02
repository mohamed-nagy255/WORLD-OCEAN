<?php

namespace App\Http\Controllers\home;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffersController extends Controller
{
    public function index () {
        $offers = Offer::where('spcial', 1) -> latest() -> paginate(12);
        return view('front-end.offers', compact('offers'));
    }

    public function show (string $name) {
        $offers = Offer::where('spcial', 0) -> latest() -> take(8) -> get();
        $offer = Offer::where('name', $name) -> first();
        return view('front-end.offer-data', compact('offers', 'offer'));
    }
}
