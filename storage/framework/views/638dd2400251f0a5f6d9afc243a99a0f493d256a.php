<?php $__env->startSection('content'); ?>

<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 

<div class="container">

    <h1 class="servicesTitle">Services</h1>
    <p class="servicesPara">Search for activites, or click on one of the general categories.</p>
   
        <div id="search" class="row">
            <form method="GET" action="<?php echo e(url('search')); ?>">
            <input type="text" name="str" id="str" class="indexFix" placeholder="Search for locations...">
            <!-- <input type="submit" value="submit" id="submit" class="indexFix"> -->
            </form>
        </div>

        <div class="container" id="txtHint">
        </div>

    <div id="fourMainGroup">
            <?php $__currentLoopData = $activityType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('activities/type/')); ?>/<?php echo e($act->type); ?>">
                <div class="fourGroup">
                    <img src="<?php echo e(asset($act->img)); ?>" class="servImg">
                    <p class="fourTitle"><?php echo e($act->type); ?></p>
                </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        <div class="panel-body none">
                <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>