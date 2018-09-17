@extends('layouts.app')

@section('content')

<img src="{{ asset('images/CampersLogo.png') }}" id="landingImg"> 
<div class="container">

                <h1 class="servicesTitle">Login</h1>

                <div class="loginForm col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <div>
                                <input class="inputField" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                            <div>
                                <input class="inputField" id="password" type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="checkbox">
                                    <label id=rememberMe>
                                        <input id="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <button class="loginSub block" type="submit">
                                    Login
                                </button>

                                <a class="block" id="passFor" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection
