<?php $__env->startSection('content'); ?>
<div class="">
<div class="table-responsive">  
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="active">Title</th>
        <th>Description</th>
        <th>Manage</th>
      </tr>
    </thead>
    <tbody>
    
     <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($p->title); ?></td>
        <td><p><?php echo e($p->body); ?></p></td>
        <td><a href="/EditPost/<?php echo e($p->id); ?>">Edit</a> | <a href="/Delete/<?php echo e($p->id); ?>">Delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <div class="form-group">
    <div class=" col-sm-10">
      <a href="/addPost" class="btn btn-primary" >Add New Publicity</a>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>