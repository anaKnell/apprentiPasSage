<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class membre_status extends Model
{
   	protected $table = "membre_status";
	protected $primaryKey = "membre_id","status_id";
	public $timestamps = false;

    protected $fillable = [
        'status_id', 'status_nom', 'status_desc',
    ];

    function getStatus(){
    	return $this->belongsTo('App\models\membre', 'status_id', 'status_id');
    }
}
