<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class prestations_cat extends Model
{
   	protected $table = "prestations_cat";
	protected $primaryKey = 'categories_id';
	public $timestamps = false;

    protected $fillable = [
        'categories_id', 'prestations_id',
    ];

    function get(){
    	return $this->belongsTo('App\models\prestation', 'prestation_id', 'categories_id');
    }
}