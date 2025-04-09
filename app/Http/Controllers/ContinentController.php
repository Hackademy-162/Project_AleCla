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
        $continents = Continent::all();
        return view('continents.index', compact('continents'));
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
        // dd($continent);

        return view('continents.edit', compact('continent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Continent $continent)
    {
        // dd($request->all(), $continent);

        $continent->update([
            'title' => $request->title,
            'img' => $request->file('img')->store('continents', 'public'),
        ]);
        return redirect(route('welcome'))->with('message', 'Continente modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Continent $continent)
    {
        // dd($continent);

        $continent->delete();

        return redirect(route('welcome'))->with('message', 'Continente eliminato con successo!');
    }
}
