<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function show($id)
    {
        $country = Destination::where('id', $id)->firstOrFail();
        $mainForm = \App\Models\MainForm::first();
        return view('pages.country',[
            'country' => $country,
            'mainForm' => $mainForm,
        ]);
    }
}
