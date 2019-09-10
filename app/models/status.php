<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
   	protected $table = "status";
	protected $primaryKey = "status_id";
	public $timestamps = false;

    protected $fillable = [
        'status_id', 'status_nom', 'status_desc',
    ];

    function getStatus(){
    	return $this->hasMany('App\models\membre', 'membre_id', 'status_id');
    }
}
