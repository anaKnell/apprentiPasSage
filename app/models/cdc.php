<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class cdc extends Model
{
   	protected $table = "cdc";
	protected $primaryKey = "cdc_id";
	public $timestamps = false;

    protected $fillable = [
        'cdc_id', 'catcdc_id', 'cdc_link','cdc_name','cdc_description',
    ];

    function getCdc(){
    	return $this->belongsTo('App\models\catcdc', 'catcdc_id', 'catcdc_id');
    }
}
