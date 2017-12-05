<?php $__env->startSection('title','Thông tin tài khoản'); ?>
<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<meta name="_token" content="<?php echo e(csrf_token()); ?>">
<link rel="stylesheet" href="<?php echo url('public/css/Account/Index.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12 infomation-account">
		<h4 id="h4Infomation">THÔNG TIN TÀI KHOẢN</h4>
		<h4 id="h4Mesage">THÔNG BÁO CỦA TÔI <span>( <span id='countNotify'><?php echo isset($countNotify)? $countNotify :'0' ?> </span> )</span></h4>
		<!-- start content -->
		<div id="infomation-content" class="infomation-content">

		</div>
	</div>
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<!-- my script -->
<script type="text/javascript" src="<?php echo url('public/js/Account/index.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>