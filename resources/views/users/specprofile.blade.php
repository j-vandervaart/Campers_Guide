@extends('layouts.app')

@section('content')
<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 

    <div class="container profile">
			<div class="row">		
            	<div class="col-xs-6">
            		<img class="imageSize" src="/uploads/prof_image/{{ $user->prof_image }}">
            	</div>
        	</div>
            <div class="row">
                <div class="col-xs-6">
                        <h3 id="username1">{{$user->username}}</h3>
                        <p>{{$user->email}}</p>
                        <p>{{$user->name}}</p>
                        <p>Member Since: {{$user->created_at}}</p>
                </div>
            </div>
    </div>
@endsection
