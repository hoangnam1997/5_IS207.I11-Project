<?php $__env->startSection('title','Nasaxo Shop'); ?>
<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/Order/header.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="header">
	<!-- css my cústom -->
	<!-- paymen progress -->
	<div class="container">
		<div class="shipping-header">
			<div class="row row-style-1">
				<div class="col-lg-8">
					<div class="row bs-wizard">
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">
								<span class="hidden-xs">Địa Chỉ Giao Hàng</span>
								<!-- <span class="visible-xs-inline-block">Địa Chỉ</span> -->
							</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<span class="bs-wizard-dot">1</span>
						</div>

						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">
								<span class="hidden-xs">Thanh Toán &amp; Đặt Mua</span>
								<!-- <span class="visible-xs-inline-block">Thanh Toán</span> -->
							</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<span class="bs-wizard-dot">2</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end payment progress -->
</div>
<div id="content">
	<?php echo $__env->yieldContent('content-order'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<!-- my script -->
<script type="text/javascript" src="<?php echo url('public/js/Order/order.js'); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>