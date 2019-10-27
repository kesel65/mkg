<?php

namespace App\Http\Controllers;

use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index', ['title' => 'Contact Michelle Kesel']);
    }

    public function store() {
        $input = request()->validate([
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
//        return $message;
//        Contact::create([
//            'name' => $input['name'],
//            'email' => $input['email'],
//            'message' => $input['message']
//        ]);

//        ddd(request());
        return view('contact.thanks', ['title' => 'Thanks for reaching out!', 'message' => $message]);
    }
}
