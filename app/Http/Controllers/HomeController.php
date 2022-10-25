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

    public function hisPlace()
    {
        $title = 'Historical Place';
        return view('historical-place', compact('title'));
    }

    public function hotel()
    {
        $title = 'Hotel';
        return view('hotel', compact('title'));
    }

    public function restaurent()
    {
        $title = 'Restaurent';
        return view('restaurent', compact('title'));
    }

    public function hospital()
    {
        $title = 'Hospital';
        return view('hospital', compact('title'));
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

    public function storeContacts(Request $request)
    {
        //
    }
}
