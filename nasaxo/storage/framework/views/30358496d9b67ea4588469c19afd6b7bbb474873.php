<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/Order/payment_address.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-order'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-7 col-md-push-2">
			<div  class="address">
				<form action="<?php echo url('cart/invoice'); ?>" enctype="multipart/form-data" method="post">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="Name">Họ tên</label>
						<input type="text" class="form-control" id="Name" placeholder="Nhập họ tên">
					</div>
					<div class="form-group">
						<label for="SDT">SĐT</label>
						<input type="email" class="form-control" id="SĐT" placeholder="Nhập SĐT">
					</div>
					<div class="form-group">
						<label for="Tinh">Tỉnh/Thành phố</label>
						<input type="password" class="form-control" id="Tinh" placeholder="nhập tên tỉnh/thành phố">
					</div>  
					<div class="form-group">
						<label for="Quan">Quận huyện/phường xã</label>
						<input type="password" class="form-control" id="Quan" placeholder="Nhập tên quận huyện hoặc phường xã
						">
					</div>  
					<div class="form-group">
						<label for="DiaChi">Địa chỉ</label>
						<input type="password" class="form-control" id="Quan" placeholder="Nhập địa chỉ
						">
					</div>   
					<button id="btnSubmitAddress" type="submit" class="btn btn-info">Cập nhật</button>
					<button id="btnCancle" type="button" class="btn btn-info">Hủy bỏ</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Order/payment_address.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Order.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>