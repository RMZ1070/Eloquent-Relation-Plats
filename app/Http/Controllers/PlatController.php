<?php

namespace App\Http\Controllers;

use App\Plat;
use App\Saveur;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plats = Plat::all();
        return view('plats/plats', compact('plats'));
    }

    public function show($id){

        $saveurs = Saveur::find($id);

        $plats = $saveurs->plats;

        return view('plats/saveurs', compact('plats','saveurs'));

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saveurs = Saveur::all();
        return view('plats/create', compact('saveurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plat = new plat();
        $plat->plat = $request->input('plat');
        $plat->id_saveur = $request->input('saveur');
        $plat->save();

        return redirect()->route('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Saveur  $saveur
     * @return \Illuminate\Http\Response
     */
    public function edit(Saveur $saveur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saveur  $saveur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $plat = Plat::find($id);
        $plat->plat = $request->input('plat');

        $plat->save();

        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saveur  $saveur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saveur $saveur)
    {
        //
    }
}
