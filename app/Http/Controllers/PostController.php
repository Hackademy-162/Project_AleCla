<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\PostController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PostController extends Controller implements HasMiddleware
{

    public static function middleware() {
        return [
            new Middleware('auth', except:['index']),
        ];
    }
    
    public function create() {
        return view('posts.create');
    }

    public function store(StorePostRequest $request){
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->itinerary = $request->itinerary;
        $post->img = $request->file('img')->store('posts', 'public');
        // dd($post);
        $post->save();
        
        return redirect()->route('welcome');
    }

    public function index() {
        $posts = Post::all();
        // dd($posts);
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        // dd($id);
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

}
