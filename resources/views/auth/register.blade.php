@extends('layouts.app')

@section('content')
<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 
<div class="container">

                <h1 class="servicesTitle">Register</h1>

                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>

                            <div>
                                <input id="name" type="text" class="inputField" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <div>
                                <input id="email" type="email" class="inputField" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username">Username</label>

                            <div>
                                <input id="username" type="text" class="inputField" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                            <div>
                                <input id="password" type="password" class="inputField" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label for="password-confirm">Confirm Password</label>

                            <div>
                                <input id="password-confirm" type="password" class="inputField" name="password_confirmation" required>
                            </div>
                        </div>

                        <div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <button type="submit" class="loginSub block">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection
