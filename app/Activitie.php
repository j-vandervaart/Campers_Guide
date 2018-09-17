<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    protected $fillable = [
        'name', 'type'
    ];

    public function type() {
    	return $this->belongsTo('App\Type');
    }

    public function message() {
    	return $this->hasMany('App\Message')->orderBy('created_at', 'desc');
    }
}
