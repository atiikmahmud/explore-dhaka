<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(5);
        return view('index', compact('title','posts'));
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

    /* Contact Functions Start */
    
    public function contacts()
    {
        $title = 'Contacts';
        return view('contacts', compact('title'));  
    }

    public function storeContacts(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required'
        ]);

        try{
            $contact = new Contact;
            $contact->name    = $request->name;
            $contact->email   = $request->email;
            $contact->message = $request->message;
            $contact->save();

            return redirect()->back()->with('success', 'Message successfully sent !!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Message not send !!');
        }
    }

    /* Contact Functions End */
}
