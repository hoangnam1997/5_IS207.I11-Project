<?php 
if(isset($_home) && $_home){?>

<?php 
}
?>
<!-- content-body -->
<?php $__env->startSection('content'); ?>
<div class="content-body">
	<?php $__env->startSection('discount'); ?>
	<!-- discount -->
	<?php if(isset($discounts)){
		echo $discounts;
	}?>
	<!-- 	end discount -->
	<?php echo $__env->yieldSection(); ?>
	<!--  product -->
	<?php $__env->startSection('product'); ?>
	<div class="content text-center">
		<h1><b>Welcome</b> to Nasaxo Shop</h1>
		<p>BEST PRODUCTS YOU EVER SEEN!</p>
	</div>
	<div class="container">
		<!-- nội dung -->
		<div id='productList' class="row product-List">
			<!-- danh sach product -->
			<?php if(isset($products)){
				echo $products;
			}?>
		</div>
		<?php echo $__env->yieldSection(); ?>
		<!-- end product -->
		<!-- end content body -->
		<!-- Email -->
	</div>
	<?php $__env->stopSection(); ?>
	<?php $__env->startSection('script'); ?>
	##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
	<script type="text/javascript" src="<?php echo url('public/js/Home/product.js'); ?>"></script>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>