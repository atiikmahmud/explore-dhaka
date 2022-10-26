<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

    /* Contact Messages Function Start */

    public function messages()
    {
        $messages = Contact::all();
        return view('admin.messages', compact('messages'));
    }

    public function readMessage($id)
    {
        $message = Contact::find($id);
        if($message->status == 0)
        {
            $message->status = 1;
            $message->save();
            return redirect()->back()->with('message-read', 'Message marked as read!');
        }
        else
        {
            $message->status = 1;
            $message->save();
            return redirect()->back()->with('message-unread', 'Message already marked as read!');
        }
    }

    public function deleteMessage($id)
    {
        $message = Contact::find($id);
        $message->delete();
        return redirect()->back()->with('success', 'Message deleted successfully!');
    }

    /* Contact Messages Function End */
}
