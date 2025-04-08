<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Continent;
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
        $continents= Continent::all();
        return view('posts.create' , compact('continents'));
    }
    
    public function store(StorePostRequest $request){
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->itinerary = $request->itinerary;
        $post->img = $request->file('img')->store('posts', 'public');
        $post->continent_id = $request->continent;
        // dd($post);
        $post->save();
        
        return redirect()->route('welcome')->with('message', 'Viaggio creato con successo');
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
    
   

    public function edit($id){
        // dd($id);
        $continents = Continent::all();
        $post = Post::find($id);
        return view('posts.edit', compact('post', 'continents'));
    }

    public function update(Request $request , $id){
        // dd($request->all(), $id);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->itinerary = $request->itinerary;
        $post->img = $request->file('img')->store('posts', 'public');
        $post->continent_id = $request->continent;
        $post->save();
        // $post->update($request->all());

        return redirect()->route('welcome')->with('message', 'Viaggio modificato con successo!');
    }

    public function destroy($id){
        // dd($id);
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('welcome')->with('message', 'Viaggio eliminato con successo!');
    }

    public function search(Continent $continent) {
        // dd($continent);
        return view ('posts.search', compact('continent'));
    }

}
