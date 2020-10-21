<?php $__env->startSection('content'); ?>
<style>
.postsbody{
    padding-left: 40px;
    font-size: 18px;
    font-style: inherit;
    font-family: cursive;
}

</style>
<div class="margin:10px;padding:5px;">
<div class="panel-group">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="panel panel-default">
<div class="row">
  <div class="col-sm-12">
    <div>
        <h4>
            <img style="width:80px;hieght:60px;" src="img/job.png">
            <?php echo e($post->title); ?>

        </h4>
    </div>
    <div class="postsbody">
    <?php echo htmlspecialchars_decode($post->body); ?>
    </div>

    <a href="/post/<?php echo e($post->id); ?>" style="float:right; margin:5px" class="btn btn-primary">More...</a>
  </div>
</div>


    
  </div>
  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>