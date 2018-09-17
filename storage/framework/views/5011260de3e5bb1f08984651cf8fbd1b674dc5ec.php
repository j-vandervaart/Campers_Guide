<?php $__env->startSection('content'); ?>

<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 
<div class="container">

                <h1 class="servicesTitle">Login</h1>

                <div class="loginForm col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email">E-Mail Address</label>

                            <div>
                                <input class="inputField" id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password">Password</label>

                            <div>
                                <input class="inputField" id="password" type="password" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="checkbox">
                                    <label id=rememberMe>
                                        <input id="checkbox" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <button class="loginSub block" type="submit">
                                    Login
                                </button>

                                <a class="block" id="passFor" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>