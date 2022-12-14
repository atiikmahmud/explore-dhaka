<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function posts()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(10);
        // dd($posts->toArray());
        return view('admin.posts', compact('posts'));
    }

    public function addPost()
    {
        return view('admin.add-post');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'caption'       => 'required',
            'details'       => 'required',
            'category'      => 'required',
            'map'           => 'required',
        ]);

        try{
            
            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
                $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $postImage);
                $input['image'] = "$postImage";
            }
            
            $post = new Post;
            $post->image   = $postImage;
            $post->caption = $request->caption;
            $post->title   = $request->title;
            $post->details = $request->details;
            $post->category= $request->category;
            $post->map     = $request->map;
            $post->user_id = Auth()->user()->id;
            $post->save();

            return redirect()->back()->with('success', 'Post created successfully !!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Post not created !!');
        }
    }

    public function singlePost($id)
    {
        $title = 'Post';
        $post = Post::with('user')->where('id', $id)->first();
        $comments = Comment::where('post_id', $id)->get();
        return view('admin.single-post', compact('title','post','comments'));
    }

    public function editPost($id)
    {
        $title = 'Edit Post';
        $post = Post::where('id', $id)->first();
        
        return view('admin.edit-post', compact('title','post'));
    }

    public function updatePost(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'caption'       => 'required',
            'details'       => 'required',
            'category'      => 'required',
            'map'           => 'required',
        ]);

        try{
            $post = Post::find($request->id);
            if($request->has('image') && !empty($request->image))
            {

                $image = $request->file('image');
                $destinationPath = 'image/';
                $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $postImage);
                $input['image'] = "$postImage";
                $post->image   = $postImage;
            }
            $post->caption = $request->caption;
            $post->title   = $request->title;
            $post->details = $request->details;
            $post->category= $request->category;
            $post->map     = $request->map;
            $post->user_id = Auth()->user()->id;
            $post->save();

            return redirect()->back()->with('success', 'Post updated successfully !!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Post not update !!');
        }
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully!');
    }

    public function comments()
    {
        $comments = Comment::all();
        return view('admin.comments', compact('comments'));
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully!');
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

    /* Slider Function Start */

    public function sliders()
    {
        $slider1 = Slider::where('id', 1)->first();
        $slider2 = Slider::where('id', 2)->first();
        $slider3 = Slider::where('id', 3)->first();
        return view('admin.sliders', compact('slider1','slider2','slider3'));
    }

    public function sliderUpadte(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'caption'       => 'required',
        ]);

        try{
            $slider = Slider::find($request->id);
            if($request->has('image') && !empty($request->image))
            {

                $image = $request->file('image');
                $destinationPath = 'slider/';
                $slideImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $slideImage);
                $input['image'] = "$slideImage";
                $slider->image   = $slideImage;
            }
            $slider->caption = $request->caption;
            $slider->title   = $request->title;
            $slider->save();

            return redirect()->back()->with('success', 'Slide updated successfully !!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Slide not update !!');
        }
    }

    /* Slider Function End */
}
