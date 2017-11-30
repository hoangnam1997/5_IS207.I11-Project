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
						<label for="Name">Họ tên người nhận</label>
						<input type="text" class="form-control" id="Name" name="name" placeholder="Nhập họ tên" value="<?php echo isset($deliveryPlace[0]->ReceiveName) ? $deliveryPlace[0]->ReceiveName : ""; ?>" required>
					</div>
					<div class="form-group">
						<label for="SDT">Số điện thoại</label>
						<input type="text" class="form-control" id="SĐT" name="phone" placeholder="Nhập SĐT" value="<?php echo isset($deliveryPlace[0]->NumberPhone) ? $deliveryPlace[0]->NumberPhone : ""; ?>" required>
					</div>
					<?php 	$ward = isset($deliveryPlace[0]->ID_Ward) ? $deliveryPlace[0]->Ward()->get()[0] : null; 
							$district =  isset($ward->ID_District) ? $ward->District()->get()[0] : null; 
							$city =  isset($district->ID_City) ? $district->City()->get()[0] : null; 
						?>
					<div class="form-group">
						<label for="Tinh">Tỉnh/Thành phố</label>
						<input type="text" class="hidden" id="cityControl" name="city" value="<?php if($city != null){ echo $city->id; } ?>"  required>
						<input type="text" class="form-control" id="city" value="<?php if($city!=null){ echo $city->Name; } ?>" placeholder="nhập tên tỉnh/thành phố">
					</div>  
					<div class="form-group">
						<label for="Quan">Quận huyện/phường xã</label>
						<input type="text" class="hidden" id="districtControl" name="district" value="<?php if($district != null){ echo $district->id; } ?>"  required>
						<input type="text" class="form-control" id="district" value="<?php if($district!=null){ echo $district->Name; } ?>" placeholder="Nhập tên quận huyện hoặc phường xã
						">
					</div>  
					<div class="form-group">
						<label for="ward">Khu vực</label>
						<!-- ward of delivery -->
						<input type="text" class="hidden" id="wardControl" name="ward" value="<?php if($ward != null){ echo $ward->id; } ?>" required>
						<input type="text" class="form-control" id="ward" value="<?php if($ward!=null){ echo $ward->Name; } ?>" placeholder="Nhập địa chỉ
						">
					</div>   
					<div class="form-group">
						<!-- địa chỉ -->
						<label for="DiaChi">Địa chỉ</label>
						<input type="text" class="form-control" id="DiaChi" name="deveryPlace" value="<?php echo isset($deliveryPlace[0]->DeliveryPlaces) ? $deliveryPlace[0]->DeliveryPlaces : ""; ?>" placeholder="Nhập địa chỉ
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