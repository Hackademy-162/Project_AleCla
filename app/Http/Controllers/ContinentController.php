<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ContinentController extends Controller implements HasMiddleware
{
    public static function middleware() {
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
        return view('continents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Continent::create([
            'title' => $request->title,
            'img' => $request->file('img')->store('continents', 'public'),
        ]);

        return redirect(route('welcome'))->with('message', 'Continente creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Continent $continent)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Continent $continent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Continent $continent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Continent $continent)
    {
        //
    }
}
