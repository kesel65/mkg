<?php

namespace App\Http\Controllers;

use App\Contact;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index', ['title' => 'Contact Michelle Kesel']);
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'message.required' => 'Message is required'
        ]);

//        dump(request()->all());
        $message = Contact::create($input);
        $to = ['email' => trim('michellekesel90@gmail.com')];
        Mail::to($to)->send(new ContactMail($message));
        return view('contact.thanks', ['title' => 'Thanks for reaching out!', 'message' => $message]);
    }
}
