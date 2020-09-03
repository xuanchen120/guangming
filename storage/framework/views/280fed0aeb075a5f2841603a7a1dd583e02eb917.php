<?php $__env->startSection('content'); ?>
<!-- 登录 Start -->
<form action="<?php echo e(route('mydata.yeardo',$data)); ?>" method="POST" accept-charset="utf-8">
    <div class="login_container" >
        <div class="login_block login_margin">
            <i class="icon icon-file-word login_i" style="font-size:1rem"></i>
            <input type="tel" name="number" value="<?php echo e($data->number); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>" class="input login_input" >
        </div>
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <button type="sublimt" class="btn login_btn ajax-post" >提交</button>
    </div>
    <div class="white_fixed"></div>
</form>
<!-- 登录 End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>