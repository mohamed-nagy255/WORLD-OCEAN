<?php

namespace App\Http\Controllers\home;

use App\Models\country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index () {
        $countries = country::paginate(12);
        return view('front-end.countries', compact('countries'));
    }
}
