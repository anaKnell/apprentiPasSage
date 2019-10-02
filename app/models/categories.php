<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
   	protected $table = "categories";
	protected $primaryKey = "categories_id";
	public $timestamps = false;

    protected $fillable = [
      'categories_img'
    ];

        function getCategorie(){
    	return $this->hasMany('App\models\name_categorie', 'categories_id', 'categories_id');
    }

    	function getCat(){
    		return $this->belongsToMany('App\Models\prestations','prestations_cat','categories_id','prestations_id');
    	}

}
