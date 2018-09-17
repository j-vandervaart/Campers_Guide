@extends('layouts.app')

@section('content')
    <div>
    @foreach($users as $u)

    <div>
        <h3>{{$u->name}}</h3>
    </div>
    @endforeach
    </div>
@endsection