<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class PrestationController extends Controller
{
    public function getCatPrestation($catId)
    {
    	$prestaCat = models\categories::where('categories_id','=',$catId)->with('getCat')->get();    	     

       return view('pages.prestations', compact('prestaCat'));
    }

    public function getOnePrestation($prestaId){
    	$onePresta = models\prestations::where('prestations_id','=',$prestaId)->with('getPlusPresta')->get();
    	return view('pages.prestation', compact('onePresta'));
    }
}

