<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['type']; 

    public function activitie() {
    	return $this->hasMany('App\Activitie');
    }
}
