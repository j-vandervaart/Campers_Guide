<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 
<div class="container">

                <h1 class="servicesTitle">Register</h1>

                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name">Name</label>

                            <div>
                                <input id="name" type="text" class="inputField" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email">E-Mail Address</label>

                            <div>
                                <input id="email" type="email" class="inputField" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label for="username">Username</label>

                            <div>
                                <input id="username" type="text" class="inputField" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                                <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password">Password</label>

                            <div>
                                <input id="password" type="password" class="inputField" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>