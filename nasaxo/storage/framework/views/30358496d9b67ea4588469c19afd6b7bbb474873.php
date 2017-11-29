<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/Order/payment_address.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-order'); ?>
<?php if(isset($deliveryPlace)) print_r($deliveryPlace[0]->DeliveryPlaces); ?>
<div class="container">
	<div class="row">
		<div class="col-md-7 col-md-push-2">
			<div  class="address">
				<form action="<?php echo url('cart/invoice'); ?>" enctype="multipart/form-data" method="post">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="Name">Họ tên người nhận</label>
						<input type="text" class="form-control" id="Name" name="name" placeholder="Nhập họ tên" required>
					</div>
					<div class="form-group">
						<label for="SDT">Số điện thoại</label>
						<input type="text" class="form-control" id="SĐT" name="phone" placeholder="Nhập SĐT" required>
					</div>
					<div class="form-group">
						<label for="Tinh">Tỉnh/Thành phố</label>
						<input type="text" class="hidden" id="cityControl" name="city" required>
						<input type="text" class="form-control" id="city" placeholder="nhập tên tỉnh/thành phố">
					</div>  
					<div class="form-group">
						<label for="Quan">Quận huyện/phường xã</label>
						<input type="text" class="hidden" id="districtControl" name="district" required>
						<input type="text" class="form-control" id="district" placeholder="Nhập tên quận huyện hoặc phường xã
						">
					</div>  
					<div class="form-group">
						<label for="ward">Khu vực</label>
						<input type="text" class="hidden" id="wardControl" name="ward" required>
						<input type="text" class="form-control" id="ward" placeholder="Nhập địa chỉ
						">
					</div>   
					<div class="form-group">
						<label for="DiaChi">Địa chỉ</label>
						<input type="text" class="form-control" id="DiaChi" name="deveryPlace" placeholder="Nhập địa chỉ
						" required>
					</div>   
					<button id="btnSubmitAddress" type="submit" class="btn btn-info pull-right">Tiếp tục</button>
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