<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" method="post" action="addPost">
<?php echo e(csrf_field()); ?>

<div class="form-group">
    <label for="email" class="col-sm-2 control-label"></label>
    <div class="col-sm-8">
      <span><h1>  Post Your  Publicity...</h1></span>
    </div>
  </div>
  <input type="hidden" name="userid" value="<?php echo e(Auth::user()->id); ?>"/>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Title </label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" placeholder="job name " name="title" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-8">
      <textarea name="body" class="ckeditor" id="ckeditor"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="post" class="btn btn-success" >Post Publicity</button>
    </div>
  </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>