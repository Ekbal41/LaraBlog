<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
//import Auth
use Illuminate\Support\Facades\Auth;


class FrontendController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->paginate(5);
        return view('frontend.home', compact('posts'));
    }

    //controller for single post via slug
    public function singlepost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        
        $related = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->get();
        return view('frontend.single', compact('post','related'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $posts = Post::where('title', 'like', '%'.$search.'%')->paginate(5);
        return view('frontend.search', compact('posts','search'));
    }
    public function reso(){
        return view('frontend.reso');
    }
    public function design(){
        return view('frontend.design');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function singleins(){
        return view('frontend.singleins');
    }


}
