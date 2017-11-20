<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/Order/invoice.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-order'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="paymentmethod">
				<h3>Hình thức thanh toán</h3>
				<div class="choices_payment">
					<form>
						<div class="checkbox">
							<label><input type="checkbox" value="">Thanh toán tiền mặt khi nhận hàng</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Chuyển khoản qua ngân hàng</label>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="time">
				<h3>Thời gian giao hàng dự kiến</h3>
				<span class= "fa fa-bicycle">  Giao hàng tiêu chuẩn dự kiến vào thứ 6 ngày 13</span>
			</div>
		</div>
	</div>
</div> <!-- end container -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="DonHang">
				<form class=" col-md-12 header" action="<?php echo url('cart'); ?>" method="get">
					<h3 class="donhang">Đơn hàng</h3> 
					<button type="submit" class= "btn btn-default pull-right">Sửa </button>
					<hr class="hr">
				</form>
				<div class="col-md-12 content">						
					<div class="col-md-12 product">
						<p class= "col-md-6">1 * áo Sida</p>
						<span class="col-md-6 col-md-push-2">750.000 đ</span>
					</div>
					<div class="col-md-12 product">
						<p class= "col-md-6">1 * áo Sida</p>
						<span class="col-md-6 col-md-push-2">750.000 đ</span>
					</div>

					<hr class="hr">							
				</div>

				<div class= "col-md-12 prices">
					<div class="col-md-12 Tamtinh">
						<p class="col-md-6">Tạm tính:</p>
						<span class="col-md-6 col-md-push-2"">1.300.000</span>
					</div>
					<div class= "col-md-12 PhiVanChuye">
						<p class="col-md-6">Phí vận chuyện:</p>
						<span class="col-md-6 col-md-push-2">20.000 đ</span>
					</div>
					<hr class="hr">
				</div>

				<div class="col-md-12 TongTien">
					<h3 class="col-md-6">Tổng tiền:</h3>
					<span class="col-md-6 col-md-push-2"><h3>1.320.000 đ</h3></span>
				</div>

			</div>	<!-- end don hang -->				

		</div>


		<div class="col-md-6">
			<form class="address-invoice" action="<?php echo url('cart/order'); ?>" method="post">
				<?php echo e(csrf_field()); ?>

				<h3>Địa chỉ giao hàng</h3>
				<button type="submit" class= "btn btn-default pull-right">Sửa </button>
				<hr>
				<div class=content>
					<b>Đại ca hống hách là tên ta</b>	<br>
					<p>
						Xóm nhà lá, huyện nhà bè, tỉnh nhà chuột <br>	
						SĐT:6677 3508
					</p>	
				</div>						
			</form>
		</div>
		<form action="<?php echo url('/'); ?>" method="post" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

			<button id="btnBuy" class = "btn btn-danger"> Đặt mua</button>
		</form>

	</div>

</div><!--  end container -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Order/invoice.js'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Order.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>