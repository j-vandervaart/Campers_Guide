@extends('layouts.app')

@section('content')
    <div>
    @foreach($users as $u)

    <div>
        <h3>{{$u->username}}</h3>
        <p>{{$u->name}}</p>
        <p>{{$u->email}}</p>
    </div>
    @endforeach
    </div>
@endsection