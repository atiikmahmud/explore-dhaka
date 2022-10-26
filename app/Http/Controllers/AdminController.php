<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function posts()
    {
        return view('admin.posts');
    }

    public function addPost()
    {
        return view('admin.add-post');
    }

    public function comments()
    {
        return view('admin.comments');
    }

    public function messages()
    {
        return view('admin.messages');
    }
}
