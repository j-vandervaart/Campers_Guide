@extends('layouts.app')

@section('content')
<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 
    <div class="marginTop container">
        <img class="detImg" src='{{ asset("images/".$activity->img_lg) }}'> 
        <div>
            <h3 class="mainTitle">{{$activity->name}}</h3>
            <p class="mainPara">{{$activity->descript}}</p>
            <div class="trace container">
            <div class="formFix row">
                <h4 class="col-xs-6 col-sm-4 col-md-3 mainTitle addCommentTitle">Comments:</h4>
                <button id="test" class="col-xs-6 col-sm-3 addComment">Add a comment</button>
            </div>
                <form class="test2" action="{{ url('activities/') }}/{{ $activity->id }}/message" method="post">
                    {{ csrf_field() }} <!-- //grabs auto generated session token */ -->
                    <div>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="Message Title"><br>
                    </div>
                    <div>
                        <textarea placeholder="Comment" id="msg" type="text" name="contents" class="form-control" value="{{ old('contents') }}"></textarea><br>
                    </div>
                        <input type="submit" id="messSub" class="loginSub">
                </form>
                <hr>
        		@foreach($activity->message as $mess)
                <div class="greyBox">
        		<h4 class="messTitle">{{$mess->title}}</h4>
                <p class="messPara">{{$mess->contents}}</p>
                <p>created at: {{$mess->created_at}}</p>
                <p>posted by: {{$mess->poster}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection