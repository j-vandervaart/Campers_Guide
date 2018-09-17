@extends('layouts.app')

@section('content')
<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 

    <div class="container profile">
            <h3 id="username">{{$username->username}}</h3>        
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-2">
            	   <img class="imageSize" src="/uploads/prof_image/{{ $username->prof_image }}">
                </div>
                <div class="actPara col-xs-6 col-sm-5 col-md-4">
                        <p>Email: {{$username->email}}</p>
                        <p>Name: {{$username->name}}</p>
                        <p>Member Since: {{$username->created_at}}</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <form id="imgForm" enctype="multipart/form-data" action="{{ url('users/profile/') }}" method="POST">
                        <label class="updatePicText">Update Profile Image</label>
                        <div class="wrapper">
                            <button class="fileUp">Upload a file</button>
                            <input type="file" name="prof_image">
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="imgUp">
                    </form> 
                </div>
            </div>
    </div>
@endsection