<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset('images/CampersLogo.png')); ?>" id="landingImg"> 
    <div class="marginTop container">
        <img class="detImg" src='<?php echo e(asset("images/".$activity->img_lg)); ?>'> 
        <div>
            <h3 class="mainTitle"><?php echo e($activity->name); ?></h3>
            <p class="mainPara"><?php echo e($activity->descript); ?></p>
            <div class="trace container">
            <div class="formFix row">
                <h4 class="col-xs-6 col-sm-4 col-md-3 mainTitle addCommentTitle">Comments:</h4>
                <button id="test" class="col-xs-6 col-sm-3 addComment">Add a comment</button>
            </div>
                <form class="test2" action="<?php echo e(url('activities/')); ?>/<?php echo e($activity->id); ?>/message" method="post">
                    <?php echo e(csrf_field()); ?> <!-- //grabs auto generated session token */ -->
                    <div>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title')); ?>" placeholder="Message Title"><br>
                    </div>
                    <div>
                        <textarea placeholder="Comment" id="msg" type="text" name="contents" class="form-control" value="<?php echo e(old('contents')); ?>"></textarea><br>
                    </div>
                        <input type="submit" id="messSub" class="loginSub">
                </form>
                <hr>
        		<?php $__currentLoopData = $activity->message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="greyBox">
        		<h4 class="messTitle"><?php echo e($mess->title); ?></h4>
                <p class="messPara"><?php echo e($mess->contents); ?></p>
                <p>created at: <?php echo e($mess->created_at); ?></p>
                <p>posted by: <?php echo e($mess->poster); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>