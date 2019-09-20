<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class contactUS extends Model
{
    public $table = 'contact_us';
	public $fillable = ['name','email','message'];
	protected $guarded = [];

}
