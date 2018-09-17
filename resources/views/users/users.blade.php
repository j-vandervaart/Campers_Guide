@extends('layouts.app')

@section('content')
<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 
    <div class="container profile">
    	<h3 class="mainTitle">Camper's Guide Users</h3>
    @foreach($users as $u)

	<div class="col-xs-12 col-md-6 users">
    	<div class="col-xs-3 col-sm-2">
    		<img class="userImg" src="/uploads/prof_image/{{ $u->prof_image }}" height="50" width="50">
    	</div>
    	<div class="usersTitle col-xs-9 col-sm-10">
        	<h5><a href="{{ url('users/profile/')}}/{{ $u->id }}">{{$u->username}}</a></h5>
            <p>Member since: {{ $u->created_at }}</p>
    	</div>
        <hr>
    </div>
    
    	@endforeach	
	</div>
@endsection