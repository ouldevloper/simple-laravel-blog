<?php $__env->startSection('content'); ?>
<style>
.about{
    background-color: #ead7d7;
}
fieldset{
    border: 1px solid;
    padding-left: 020px;
}
</style>
<div class="about">
<div class="col-sm-12">
        <div class="jumbotron">
    <h1 style="width:100%;">OulDeveloper Community</h1> 
    <p> OULDEVELOPER Community is a community <br>interested for Software developement<br>
    <fieldset style="border:1px solid;">
    <legend>Contact us </legend>
    <h2> Facebook : https://www.facebook.com/maruki00</h2>
    <h2> Gmail : abdellahoulahyane5@gmail.com</h2>
    <h2> Whatsapp : +212695002375</h2>
    </fieldset>
    
</p> 
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>