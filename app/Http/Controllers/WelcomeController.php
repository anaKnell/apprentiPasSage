<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class WelcomeController extends Controller
{
    public function index()
    {	

    	$categorie = models\categories::with('getCategorie')->get();
    	$team = models\membre::with('getMembre')->get();

        $now = date('Y-m-d');
        $events_next = models\evenement::whereYear('evenement_date','>=',$now)->get();




        return view('pages.accueil', compact('categorie','team','events_next'));
    }

    public function showAsso()
    {
        return view('pages.association');
    }
    
}

