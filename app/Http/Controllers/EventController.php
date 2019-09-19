<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class EventController extends Controller
{
    public function getOneEvent($eventId)
    {
    	$oneEvent = models\evenement::where('evenement_Id','=',$eventId)->get();    	     
       return view('pages.event', compact('oneEvent'));
    }

}
