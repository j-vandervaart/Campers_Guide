@extends('layouts.app')

@section('content')
<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 

<div class="container">

	@foreach($activities as $activitie)
		<h1 class="servicesTitle">{{ $activitie->type }}</h1>

		@foreach($activitie->activitie as $act)
		    <div class="row">
		    	<div class="col-xs-4 col-sm-3 col-lg-2">
		    		<img class="actImg" src="{{ asset('images/'.$act->img) }}">
		    	</div>
		    	<div id="divFix" class="col-xs-4 col-sm-9 col-xs-10">
		        	<a href="{{ url('activities/') }}/{{ $act->id }}"><h3 class="actHdg">{{$act->name}}</h3></a>
		        	<p class="actPara">{{ $act->descript }}</p>
		       	</div>
		    </div>
		    <hr>
    	@endforeach
    @endforeach
</div>

@endsection