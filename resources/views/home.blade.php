@extends('layouts.app')

@section('content')

<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 

<div class="container">

    <h1 class="servicesTitle">Services</h1>
    <p class="servicesPara">Search for activites, or click on one of the general categories.</p>
   
        <div id="search" class="row">
            <form method="GET" action="{{ url('search') }}">
            <input type="text" name="str" id="str" class="indexFix" placeholder="Search for locations...">
            <!-- <input type="submit" value="submit" id="submit" class="indexFix"> -->
            </form>
        </div>

        <div class="container" id="txtHint">
        </div>

    <div id="fourMainGroup">
            @foreach($activityType as $act)
                <a href="{{ url('activities/type/') }}/{{ $act->type }}">
                <div class="fourGroup">
                    <img src="{{ asset($act->img) }}" class="servImg">
                    <p class="fourTitle">{{$act->type}}</p>
                </div>
                </a>
            @endforeach



        <div class="panel-body none">
                @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
