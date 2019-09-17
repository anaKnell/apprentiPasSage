<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class text_prestation extends Model
{
   	protected $table = "text_prestation";
	protected $primaryKey = "prestations_id";
	public $timestamps = false;

    protected $fillable = [
        'prestations_id', 'prestation_nom', 'prestations_description','prestations_cahierdescharges','prestations_objectifs','prestations_prix','prestations_participants'
    ];


}
