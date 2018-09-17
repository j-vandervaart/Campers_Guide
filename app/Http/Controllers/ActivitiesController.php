<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitie;

class ActivitiesController extends Controller
{
	public function ajaxSearch(Request $request) {
		$q = $_GET['str'];
		$result = Activitie::where('name','LIKE','%'.$q.'%')
                           ->get();
       	if(count($result) == 0){
       		echo '<p>no results</p>';
       	}else{
       	return $result;
       	}
	}

	public function getOne($id) {
		$activity = Activitie::where('id', $id)->with('message')->first();
		return view('activities.activitiesDetails', ['activity' => $activity]);
		// return $activity;
	}

	public function test(Request $request) {
		$results = Activitie::where('name','LIKE','%'.$request->str.'%')->get();
		if(count($results) == 0) {
			 return back();
		} else {
			// return $results; 
			return view('activities.searchRes', ['results' => $results]);
		}
	}
}
