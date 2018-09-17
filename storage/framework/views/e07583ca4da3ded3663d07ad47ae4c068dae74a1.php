<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 
    <div class="container profile">
    	<h3 class="mainTitle">Camper's Guide Users</h3>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<div class="col-xs-12 col-md-6 users">
    	<div class="col-xs-3 col-sm-2">
    		<img class="userImg" src="/uploads/prof_image/<?php echo e($u->prof_image); ?>" height="50" width="50">
    	</div>
    	<div class="usersTitle col-xs-9 col-sm-10">
        	<h5><a href="<?php echo e(url('users/profile/')); ?>/<?php echo e($u->id); ?>"><?php echo e($u->username); ?></a></h5>
            <p>Member since: <?php echo e($u->created_at); ?></p>
    	</div>
        <hr>
    </div>
    
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>