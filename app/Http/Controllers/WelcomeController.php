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
        return view('pages.accueil', compact('categorie','team'));
    }

    public function showAsso()
    {
        return view('pages.association');
    }
    
}

