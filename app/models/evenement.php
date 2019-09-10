<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
   	protected $table = "evenement";
	protected $primaryKey = "evenement_Id";
	public $timestamps = false;

    protected $fillable = [
        'evenement_Img', 'evenement_titre','evenement_short_desc','evenement_text','evenement_date','evenement_doc'
    ];


}
