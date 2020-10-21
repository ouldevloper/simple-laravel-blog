<?php $__env->startSection('content'); ?>







<style>
.userlogo{
    float:left;
    padding-top:12px;
    hieght:30px;
}
.createdPost{
    font-size: 9px;
    margin-top: -7px;
    padding-left: 7px;
}
.username {
    font-size: 18px;
    margin-top: 3px;
    padding-left: 7px;
    text-decoration: none;
}
.cmntBody{
    margin: 3px;
    border: 1px solid #dacccc;
    padding-left: 4px;
}
.commentarea{
    padding-top: 5px;
    padding-left: 5px;
}
</style>



<div class="panel-group">
    <div class="showpost">
        <div class="panel panel-default">
            <div class="row">
                <div class="col-sm-12">
                    <div class="userlogo">
                        <img src="/img/user.png"> 
                    </div>
                    <div style="float:left;">
                        <div class="username"><a href="/profile/<?php echo e($post->userid); ?>"><?php echo e($post->username); ?></a></div>
                        <div class="createdPost"><?php echo e($post->created_at); ?> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div title="title">
                        <h2 style="padding-left:15px;"><?php echo e($post->title); ?></h2>
                    </div>
                    <div title="post body" style="padding-left:25px;"> 
                    <?php echo htmlspecialchars_decode($post->body); ?>
                    
                    </div>    
                </div>
            </div>
        </div>
        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
        <div class="panel panel-default commentarea">
            <div class="row">
            <!--Add Comenet-->
                <form method="post" action="/addComment" class="form">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="postid" value="<?php echo e($post->id); ?>"/>
                    <div class="col-sm-10">
                        <textarea style="width:100%" name="body"></textarea>  
                    </div>
                    <div class="col-sm-1 commentbtn">
                        <input class="btn btn-primary" type="submit"  value="comment" name="addcomment">
                    </div>
                </form>
            </div>
        </div>
        <?php endif; ?>
        <div class="panel panel-default">
            <div class="panel-group">
            <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div   class="panel panel-default cmntBody">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="userlogo">
                                <img src="/img/user.png"> 
                            </div>
                            <div style="float:left;">
                                <div class="username"> <a href="/profile/<?php echo e($comment->userid); ?>"><?php echo e($comment->username); ?></a></div>
                                <div class="createdPost"> <?php echo e($comment->created_at); ?> </div>
                            </div>
                            <br>
                            <br>
                            <div style="padding-left:35px;font-size:19px">
                            <?php echo e($comment->body); ?>    
                        </div>
                        </div>
                        
                    </div>                   
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>































<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>