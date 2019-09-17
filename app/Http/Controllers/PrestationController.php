<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class PrestationController extends Controller
{
    public function getOnePrestation($catId)
    {	
    	//va chercher la catégories_ID par la méthode GET URL, le where correspond à une clé non primaire
    /*	$PrestationCat = models\prestations_cat::where('categories_id','=',$catId)->get();*/

    	$prestaCat = models\categories::where('categories_id','=',$catId)->with('getCat')->get();    	     

       return view('pages.prestation', compact('prestaCat'));
    }

    
}

