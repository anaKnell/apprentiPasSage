<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class prestations extends Model
{
   	protected $table = "prestations";
	protected $primaryKey = "prestations_id";
	public $timestamps = false;

    protected $fillable = [
        'prestations_id', 'prestations_img1',
    ];

    public function getPresta(){

    	return $this->belongsToMany('App\models\categories','prestations_cat','prestations_id','categories_id');
   }

   public function getPlusPresta(){
   		return $this->hasMany('App\models\text_prestation', 'prestations_id', 'prestations_id');
   }

}
