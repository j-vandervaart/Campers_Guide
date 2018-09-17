@extends('layouts.app')

@section('content')
<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 

<div class="container">

		<h1 class="servicesTitle">Search Results</h1>

		@foreach($results as $result)
		    <div class="row">
		    	<div class="col-xs-4 col-sm-3 col-lg-2">
		    		<img class="actImg" src="{{ asset('images/'.$result->img) }}">
		    	</div>
		    	<div id="divFix" class="col-xs-4 col-sm-9 col-xs-10">
		        	<a href="{{ url('activities/') }}/{{ $result->id }}"><h3 class="actHdg">{{$result->name}}</h3></a>
		        	<p class="actPara">{{ $result->descript }}</p>
		       	</div>
		    </div>
		    <hr>
    	@endforeach
</div>

@endsection