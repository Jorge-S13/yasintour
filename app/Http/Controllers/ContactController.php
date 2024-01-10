<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function save(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('message',"Спасибо за заявку");
    }
}
