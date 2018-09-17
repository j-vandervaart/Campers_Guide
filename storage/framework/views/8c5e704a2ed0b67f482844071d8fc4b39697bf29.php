<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 

<div class="container">

		<h1 class="servicesTitle">Search Results</h1>

		<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    <div class="row">
		    	<div class="col-xs-4 col-sm-3 col-lg-2">
		    		<img class="actImg" src="<?php echo e(asset('images/'.$result->img)); ?>">
		    	</div>
		    	<div id="divFix" class="col-xs-4 col-sm-9 col-xs-10">
		        	<a href="<?php echo e(url('activities/')); ?>/<?php echo e($result->id); ?>"><h3 class="actHdg"><?php echo e($result->name); ?></h3></a>
		        	<p class="actPara"><?php echo e($result->descript); ?></p>
		       	</div>
		    </div>
		    <hr>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>