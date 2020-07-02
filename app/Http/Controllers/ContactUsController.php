<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('pages.contact');
    }

    public function store(){

        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        Mail::to('klintjanku99@gmail.com')->send(new ContactUsMail($data));

        return redirect('/contact')->with('success', 'Thank you for contacting us');
    }
}
