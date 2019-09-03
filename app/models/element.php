<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
	protected $table = "element";
	protected $primaryKey = "id";
	public $timestamps = false;

    protected $fillable = [
        'id', 'name', 'text', 'img',
    ];
}
