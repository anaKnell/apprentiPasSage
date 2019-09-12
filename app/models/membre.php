<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class membre extends Model
{
   	protected $table = "membre";
	protected $primaryKey = "membre_id";
	public $timestamps = false;

    protected $fillable = [
        'membre_id', 'membre_nom', 'membre_prenom','membre_tel','membre_email','membre_photo','membre_description',
    ];

    function getMembre(){
    	return $this->belongsToMany('App\models\status', 'membre_status', 'membre_id','status_id');
    }

}

