@extends('layouts.app')

@section('content')
        <div>
            <img src="{{ asset('images/CampersLogo.png') }}" id="loginImg">
            <picture>
                <source media="(min-width: 1080px)" srcset="{{ asset('images/splash_xl.png') }}">
                <source media="(min-width: 1025px)" srcset="{{ asset('images/splash_lrg.png') }}">
                <img src="{{ asset('images/splash_small.png') }}" id="splashSmall" alt="Flowers">
            </picture>
            
            <div id="buttonsGroup">
                <p id="splashInfo">A place for learning about camping experiences in <span>Ontario.</span></p>
                @guest
                <a href="{{ route('login') }}" class="mainpageButtons floatLeft">Login</a>
                <a href="{{ route('register') }}" class="mainpageButtons floatRight">Register</a>
                @endguest
            </div>
            
        </div>
    </div>
    <div id="about">
        <h1 class="mainTitle">What is Camper's Guide?</h1>
        <p class="mainPara">Camper's Guide is a website built for providing information on outdoor activities in Southwestern Ontario.</p>
        <h1 class="mainTitle">Services</h1>
        <p class="mainPara">Member's of Camper's Guide will have access to information about Southwestern Ontario:</p>
        <div id="servGroup">
            <div class="marginDiv col-xs-6"> 
                <div class="col-xs-6 servOne">
                    <img src="{{ asset('images/fishing-man.svg') }}" class="imgGroup">
                    <p class="centeredText">FISHING</p>
                </div>
            </div>
            <div class="marginDiv col-xs-6"> 
                <div class="col-xs-6 servOne">
                    <img src="{{ asset('images/hiking.svg') }}" class="imgGroup">
                    <p class="centeredText">HIKING</p>
                </div>
            </div>
            <div class="marginDiv col-xs-6"> 
                <div class="col-xs-6 servOne">
                    <img src="{{ asset('images/night-camping.svg') }}" class="imgGroup">
                    <p class="centeredText">CAMPING</p>
                </div>
            </div>
            <div class="marginDiv col-xs-6"> 
                <div class="col-xs-6 servOne">
                    <img src="{{ asset('images/man-in-canoe.svg') }}" class="imgGroup">
                    <p class="centeredText">PADDLING</p>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="container">
            <h1 class="mainTitle">Like Us?</h1>
            <p id="socialHail">Follow us on social media.</p>
            <div class="row" id="socialButtonGroup">
                <div class="col-xs-3"><a href="#"><img class="socialImg" src="{{ asset('images/facebook-logo-button.svg') }}"></a></div>
                <div class="col-xs-3"><a href="#"><img class="socialImg" src="{{ asset('images/instagram-logo.svg') }}"></a></div>
                <div class="col-xs-3"><a href="#"><img class="socialImg" src="{{ asset('images/twitter-logo-button.svg') }}"></a></div>
                <div class="col-xs-3"><a href="#"><img class="socialImg" src="{{ asset('images/google-plus-logo-button.svg') }}"></a></div>
            </div>
        </div>
        <picture>
            <source media="(min-width: 1080px)" srcset="{{ asset('images/becomeamember_xl.png') }}">
            <source media="(min-width: 1025px)" srcset="{{ asset('images/becomeamember_lrg.png') }}">
            <img src="{{ asset('images/becomeamember_small.png') }}" id="connectSmall">
        </picture>
    </div>
@endsection