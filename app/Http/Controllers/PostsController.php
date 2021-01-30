<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

use App\Models\Post;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        // latest()
        $posts = Post::/*whereIn('user_id', $users)->*/with('user')->orderBy('created_at', 'DESC')->get();

        //dd($posts);

        return view('posts.index', compact('posts'));
    }





    public function create() {
        //dd(request()->all());
        return view('posts.create');
    }


    public function store() {
        //dd(request()->all());
        $data = request()->validate([

            'caption' => 'required',
            'image' => ['required'],

        ]);

        $path = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$path}"))->fit(1200, 1200);
        $image->save();


        auth()->user()->posts()->create([
            'caption' =>$data['caption'],
            'image' => $path,
        ]);

        return redirect('/profile/'.auth()->user()->id);



    }

    public function show(\App\Models\Post $post) {
        //dd($post);
        return view('posts.show', compact('post'));

    }




}
