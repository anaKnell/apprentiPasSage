<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class name_categorie extends Model
{
   	protected $table = "name_categorie";
	protected $primaryKey = "categories_id";
	public $timestamps = false;

    protected $fillable = [
        'categories_id', 'categories_name', 'categories_description',
    ];

    function getCategorie(){
    	return $this->belongsTo('App\models\categories', 'categories_id', 'categories_id');
    }
}
