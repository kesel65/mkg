<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bio extends Controller
{
    public function index() {
        return view('bio', ['title' => 'Michelle Kesel\'s Bio']);
    }
}
