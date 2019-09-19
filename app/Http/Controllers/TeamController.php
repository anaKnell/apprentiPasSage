<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class TeamController extends Controller
{
    public function getOneTeam($teamId)
    {
    	$oneTeam = models\membre::where('membre_id','=',$teamId)->with('getMembre')->get();    	     

       return view('pages.team', compact('oneTeam'));
    }

}
