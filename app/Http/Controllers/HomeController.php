<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Home';
        $query = Post::query();
        if(count($request->all()) > 0)
        {
            if(!empty($request->search))
            {
                $query->where('title','like','%'.$request->search.'%')->orWhere('category','like','%'.$request->search.'%');
            }
        }
        $posts = $query->with('user')->orderBy('created_at', 'desc')->paginate(5);
        $queryData = $request->query();
        $popularPost = Post::where('category', 'Historical Place')->orderBy('created_at', 'desc')->take(7)->get();
        $popularRestaurant = Post::where('category', 'Restaurant')->orderBy('created_at', 'desc')->take(7)->get();
        $hospital = Post::where('category', 'Hospital')->orderBy('created_at', 'desc')->take(7)->get();
        $emergency = Post::where('category', 'Emergency')->orderBy('created_at', 'desc')->take(3)->get();

        return view('index', compact('title','posts','popularPost','popularRestaurant','hospital','emergency','queryData'));
    }

    public function singlePost($id)
    {
        $title = 'Post';
        $post = Post::with('user')->where('id', $id)->first();
        $comments = Comment::where('post_id', $id)->get();
        return view('single-post', compact('title','post','comments'));
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'email'       => 'required',
            'comment'     => 'required',
            'post_id'     => 'required',
        ]);

        try{
            
            $comment = new Comment;
            $comment->name    = $request->name;
            $comment->email   = $request->email;
            $comment->comment = $request->comment;
            $comment->post_id = $request->post_id;
            $comment->save();

            return redirect()->back()->with('success', 'Comment submitted !!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Comment not submitted !!');
        }


    }

    public function hisPlace()
    {
        $title = 'Historical Place';
        $posts = Post::with('user')->where('category', $title)->orderBy('created_at', 'desc')->paginate(5);
        return view('historical-place', compact('title','posts'));
    }

    public function hotel()
    {
        $title = 'Hotel';
        $posts = Post::with('user')->where('category', $title)->orderBy('created_at', 'desc')->paginate(5);
        return view('hotel', compact('title','posts'));
    }

    public function restaurant()
    {
        $title = 'Restaurant';
        $posts = Post::with('user')->where('category', $title)->orderBy('created_at', 'desc')->paginate(5);
        return view('restaurant', compact('title','posts'));
    }

    public function hospital()
    {
        $title = 'Hospital';
        $posts = Post::with('user')->where('category', $title)->orderBy('created_at', 'desc')->paginate(5);
        return view('hospital', compact('title','posts'));
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
