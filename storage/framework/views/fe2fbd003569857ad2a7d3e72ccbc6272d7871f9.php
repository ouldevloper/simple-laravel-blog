<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" method="post" action="/Edit/<?php echo e($post->id); ?>">
<?php echo e(csrf_field()); ?>

<div class="form-group">
    <label for="email" class="col-sm-2 control-label"></label>
    <div class="col-sm-8">
      <span><h1>  Post Your  Publicity...</h1></span>
    </div>
  </div>
  <input type="hidden" name="userid" value="<?php echo e($post->userid); ?>"/>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Title </label>
    <div class="col-sm-8">
      <input type="text" name="title" class="form-control" id="name" value="<?php echo e($post->title); ?>" placeholder="job name"  required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-8">
      <textarea name="body" class="ckeditor" id="ckeditor"><?php echo e($post->body); ?></textarea>

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="post" class="btn btn-success" >Update Publicity</button>
    </div>
  </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>