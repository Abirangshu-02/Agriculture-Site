<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;

use Illuminate\Http\Request;

class ContactForm extends Controller
{
    function get_data(Request $request)
    {
        if($request->method() == 'POST')
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'message'=>'required|min:3'
            ]);

            ContactMe::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message
            ]);

            return redirect()->route('contact_form')->with('success', 'Your message has been sent. Thank you!');
        }
    }
}
