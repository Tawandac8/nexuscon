<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index() {
        $categories = \App\Models\Category::all();
        return view('welcome', compact('categories'));
    }
}
