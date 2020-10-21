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
      <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($p->title); ?></td>
            <td><?php echo e($p->body); ?></td>
            <td><a>Edit</a> | <a>Delete</a></td>
          </tr>
          
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>