<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Post;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::get();
        return view('post.index', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();

        return view('post.create', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'content' => 'required',
            'kategori_id' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        $imageName = time().'.'.$request->thumbnail->extension();

        // Public Folder
        $request->thumbnail->move(public_path('image'), $imageName);
        $post = new Post;

        $post->judul = $request->judul;
        $post->content = $request->content;
        $post->kategori_id = $request->kategori_id;
        $post->thumbnail = $imageName;
        $post->save();

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.detail', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $kategori = Kategori::get();

        return view('post.edit', ['post'=>$post, 'kategori' => $kategori]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'content' => 'required',
            'kategori_id' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        $post = Post::find($id);

        if($request->has('thumbnail')){
            $path = 'image/';
            File::delete($path. $post->thumbnail);

            $imageName = time().'.'.$request->thumbnail->extension();

        // Public Folder
        $request->thumbnail->move(public_path('image'), $imageName);
       

        $post->thumbnail = $imageName;
        $post->save();
        }
        $post->judul = $request->judul;
        $post->content = $request->content;
        $post->kategori_id = $request->kategori_id;
        $post->save();

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $path = 'image/';
        File::delete($path. $post->thumbnail);

        $post->delete();

        return redirect('/post');
    }
}
