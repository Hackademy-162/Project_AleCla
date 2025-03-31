<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{

    public static function middleware(){
        return [
            new Middleware('auth', except:['index']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Article::create([ 
            'title'=>$request->title,
            'img'=>$request->file('img')->store('articles', 'public'),
            'description'=>$request->description,
            'itinerary'=>$request->itinerary,
            // 'author'=>Auth::user()->name,
        ]);

        return redirect(route('welcome'))->with('message', 'Articolo inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
