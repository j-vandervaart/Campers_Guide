<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 

    <div class="container profile">
            <h3 id="username"><?php echo e($username->username); ?></h3>        
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-2">
            	   <img class="imageSize" src="/uploads/prof_image/<?php echo e($username->prof_image); ?>">
                </div>
                <div class="actPara col-xs-6 col-sm-5 col-md-4">
                        <p>Email: <?php echo e($username->email); ?></p>
                        <p>Name: <?php echo e($username->name); ?></p>
                        <p>Member Since: <?php echo e($username->created_at); ?></p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <form id="imgForm" enctype="multipart/form-data" action="<?php echo e(url('users/profile/')); ?>" method="POST">
                        <label class="updatePicText">Update Profile Image</label>
                        <div class="wrapper">
                            <button class="fileUp">Upload a file</button>
                            <input type="file" name="prof_image">
                        </div>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" class="imgUp">
                    </form> 
                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>