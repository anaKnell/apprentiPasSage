<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class catcdc extends Model
{
   	protected $table = "cdc";
	protected $primaryKey = "catcdc_id";
	public $timestamps = false;

    protected $fillable = [
        'catcdc_id', 'catcdc_name',
    ];

        function getCatCdc(){
    	return $this->hasMany('App\models\cdc', 'catcdc_id', 'catcdc_id');
    }

}
