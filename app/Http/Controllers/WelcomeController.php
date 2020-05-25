<?php

namespace App\Http\Controllers;

use App\Welcome;
use App\Plat;
use App\Saveur;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plats = Plat::all();
        $saveurs = Saveur::all();
        return view('/welcome', compact('plats','saveurs'));
    }

   
}
