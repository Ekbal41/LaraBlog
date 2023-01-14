<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;





class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Post::all();
        return view('admin.posts.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();
            Storage::disk('public')->put($imageName, File::get($request->image));
        }

        $post = new Post();
        $post->title = $request->title;
        //slagify title
        $post->slug = Str::slug($request->title, '-');
        $post->content = $request->post;
        $post->image = $imageName;
        if ($request->has('status')) {
            $post->published = true;
        } else {
            $post->published = false;
        }

        $post->meta_description = $request->short;
        $post->author = $request->author;
        $post->category_id = $request->category;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::all();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();
            Storage::disk('public')->put($imageName, File::get($request->image));
        }else{
            $imageName = $post->image;
        }
        $post->title = $request->title;
        //slagify title
        $post->slug = Str::slug($request->title, '-');
        $post->content = $request->post;
        $post->image = $imageName;
        if ($request->has('status')) {
            $post->published = true;
        } else {
            $post->published = false;
        }

        $post->meta_description = $request->short;
        $post->author = $request->author;
        $post->category_id = $request->category;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
