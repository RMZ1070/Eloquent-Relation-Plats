<?php

namespace App\Http\Controllers;

use App\Saveur;
use Illuminate\Http\Request;

class SaveurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saveur = Saveur::all();
        return view('plats/create', compact('saveur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saveurs = Saveur::all();
        return view('saveur/createS', compact('saveurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saveur = new saveur();
        $saveur->nom = $request->input('nom');
        $saveur->save();

        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saveur  $saveur
     * @return \Illuminate\Http\Response
     */
    public function show(Saveur $saveur)
    {
        $saveurs = Saveur::all();
        return view('plats/saveurs',compact('saveurs'));
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
    public function update(Request $request, $id)
    {
        $saveur = Saveur::find($id);
        $saveur->saveur = $request->input('nom');

        $saveur->save();

        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saveur  $saveur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saveur $id)
    {
        $saveur = Saveur::find($id);
        $saveur->delete();
        return redirect()->route('welcome');
    }
}
