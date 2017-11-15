<?php $__env->startSection('title','Quên mật khẩu'); ?>
<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<!-- custom file css -->
<link rel="stylesheet" href="<?php echo url('public/css/Account/Index.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>
<!-- my script -->
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Account/Remember.js'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>