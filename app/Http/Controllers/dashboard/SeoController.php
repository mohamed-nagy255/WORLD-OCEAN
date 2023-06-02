<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    public function index () {
        $seo = Seo::find(1) -> first();
        return view('back-end.seo', compact('seo'));
    }

    public function update (request $request) {
        $validated = $request->validate([
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        seo::find(1) ->update([
            'meta_title' => $request -> meta_title,
            'meta_keywords' => $request -> meta_keywords,
            'meta_description' => $request -> meta_description,
        ]);

        return redirect()->back()->with('update', ' seo تم تعديل ');
    }
}
