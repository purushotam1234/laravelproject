<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Author;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('author')->get();
        $posts = Post::with('category')->get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
      return view ('post.create', compact('categories' , 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
                'name'=> 'string|max:40',
                'image' => 'required|mimes:jpg,jpeg,png',
                'author' => 'required|integer',
                'category' => 'required|integer',

            ]);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName); 
                
            Post::create([
             'author' => $request['author'],
             'heading'=>$request['heading'],
             'description'=>$request['description'],
             'category' => $request['category'],
            'image' => $imageName,
            'author_id' => $request->author, 
             'category_id' => $request->category, 
             ]);
            return redirect()->route('post.index');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
         $authors = Author::all();
        $categories = Category::all();
        return view('post.edit',compact('post','categories','authors'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
    $post->author_id = $request->author;
    $post->heading = $request->heading;
    $post->description = $request->description;
    $post->category_id = $request->category;

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'),$imageName);
     $post->image = $imageName;

    $post->update();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
