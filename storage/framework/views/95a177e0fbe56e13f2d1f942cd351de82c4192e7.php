<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 

<div class="container">

	<?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activitie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<h1 class="servicesTitle"><?php echo e($activitie->type); ?></h1>

		<?php $__currentLoopData = $activitie->activitie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    <div class="row">
		    	<div class="col-xs-4 col-sm-3 col-lg-2">
		    		<img class="actImg" src="<?php echo e(asset('images/'.$act->img)); ?>">
		    	</div>
		    	<div id="divFix" class="col-xs-4 col-sm-9 col-xs-10">
		        	<a href="<?php echo e(url('activities/')); ?>/<?php echo e($act->id); ?>"><h3 class="actHdg"><?php echo e($act->name); ?></h3></a>
		        	<p class="actPara"><?php echo e($act->descript); ?></p>
		       	</div>
		    </div>
		    <hr>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>