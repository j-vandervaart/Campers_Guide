<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
    	'title', 'contents', 'activitie_id', 'poster'
    ];

    public function activitie() {
    	return $this->belongsTo('App\activitie');
    }
}
