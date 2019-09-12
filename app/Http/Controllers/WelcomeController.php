<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class WelcomeController extends Controller
{
    public function index()
    {	

    	$categorie = models\categories::with('getCategorie')->get();
        $now = date('Y-m-d');
        $events_next = models\evenement::whereYear('evenement_date','>=',$now)->get();

    	$team = models\membre::with('getMembre')->get();
        //$status = models\membre_status::with('getStatus')->get();

        
       return view('pages.accueil', compact('categorie','team','events_next'));
    }

    public function showAsso()
    {
        return view('pages.association');
    }
    
}

