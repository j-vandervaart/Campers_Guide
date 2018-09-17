<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
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
                        <img src="<?php echo e(asset('images/hamburg.svg')); ?>" id="hamburg">
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul id="mainNav">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="navItems" href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a class="navItems" href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a class="navItems" href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                                
                            <div id="slideoutNav">
                                <ul>
                                    <li><a class="navItems" href="<?php echo e(url('/')); ?>">Home</a></li>
                                    <li><a class="navItems" href="<?php echo e(url('/home')); ?>">Services</a></li>
                                    <li><a class="navItems" href="<?php echo e(url('/users/list')); ?>">Users</a></li>
                                    <li><a class="navItems" href="<?php echo e(url('/users/profile')); ?>">Profile</a></li>
                                    <li>
                                        <a class="navItems" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
        <footer>
            <p id="footerText">&copy 2018 Camper's Guide</p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>" type="text/javascript"></script>
</body>
</html>
