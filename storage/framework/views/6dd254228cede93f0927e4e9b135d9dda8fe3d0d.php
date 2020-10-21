<?php $__env->startSection('content'); ?>
<style>
.profilebody{
    background-color: #fffbfb;
    padding-top: 10px;
    -webkit-border-horizontal-spacing: 0px;
    border-radius: 10px;
}

.userinfo{
    margin-left: 15px;
    padding-left: 25px;
    padding-top: 15px;
    background-color: #eff3f7;
    width: 30%;
    height: 100%;
}

.userPosts{
    padding-top: 10px;
    border-left: 1px solid;
}

.postsbody{
    padding-left: 40px;
    font-size: 18px;
    font-style: inherit;
    font-family: cursive;
}

</style>
<div class="profilebody">
<div class="row">
  <div class="col-sm-3 userinfo" >
  
    <div class="list-group">
        <span>Name : <?php echo e($user->name); ?></span><br>
        <span>Email : <?php echo e($user->email); ?></span><br>
        <span>Joined At : <?php echo e($user->created_at); ?></span><br>
        <span>Nember Of Post : <?php echo e($posts->count()); ?></span><br>
    </div>
  
  </div>
  <div class="col-sm-8 userPosts"  >
  <div class="panel-group">
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="panel panel-default">
<div class="row">
  <div class="col-sm-12">
    <div>
        <h4>
            <img style="width:80px;hieght:60px;" src="/img/job.png">
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
  
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>