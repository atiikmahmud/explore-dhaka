<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('index', compact('title'));
    }

    public function singlePost()
    {
        $title = 'Post';
        return view('single-post', compact('title'));
    }

    public function aboutUs()
    {
        $title = 'About Us';
        return view('about-us', compact('title'));
    }

    public function contacts()
    {
        $title = 'Contacts';
        return view('contacts', compact('title'));  
    }
}
