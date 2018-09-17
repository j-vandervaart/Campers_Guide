<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <div id="splash">
        <nav>
            <div>

                <div>
                    <!-- Left Side Of Navbar -->
<!--                     <ul>
                        &nbsp;
                    </ul> -->
                    <div id="navBar">
                        <img src="{{ asset('images/hamburg.svg') }}" id="hamburg">
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul id="mainNav">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="navItems" href="{{ url('/') }}">Home</a></li>
                            <li><a class="navItems" href="{{ route('login') }}">Login</a></li>
                            <li><a class="navItems" href="{{ route('register') }}">Register</a></li>
                        @else
                                
                            <div id="slideoutNav">
                                <ul>
                                    <li><a class="navItems" href="{{ url('/') }}">Home</a></li>
                                    <li><a class="navItems" href="{{ url('/home') }}">Services</a></li>
                                    <li><a class="navItems" href="{{ url('/users/list') }}">Users</a></li>
                                    <li><a class="navItems" href="{{ url('/users/profile') }}">Profile</a></li>
                                    <li>
                                        <a class="navItems" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        <footer>
            <p id="footerText">&copy 2018 Camper's Guide</p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
</body>
</html>
