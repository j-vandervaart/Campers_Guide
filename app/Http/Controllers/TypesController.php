<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Activitie;

class TypesController extends Controller
{
    public function sortTypes($type) {
    	
    	$activities = Type::where('type', $type)->with('activitie')->get();
    	return view('activities.activitiesList', ['activities' => $activities]);
    	// return $cat;
    }
}
