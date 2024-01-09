<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function show($id)
    {
        $country = Country::where('id', $id)->firstOrFail();
        return view('pages.country',[
            'country' => $country
        ]);
    }
}
