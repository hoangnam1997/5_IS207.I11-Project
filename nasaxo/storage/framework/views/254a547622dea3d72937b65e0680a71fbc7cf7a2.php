<?php $__env->startSection('content'); ?>
<!-- start Type account -->
<div name="frmFind">
	<?php echo e(csrf_field()); ?>	
	<div class="rememver-content">
		<div class="infomation-content">
			<h4>Nhập mã xác nhận</h4>
			<div class="find-content">
				<span class="Remember-email">Vui lòng nhập mã xác nhận</span>
				<input class="txtInputRemember" type="text" name="txtToken" id="txtToken" placeholder="Nhập mã">
				<span class="Remember-email">Chúng tôi đã gửi mã xác nhận về email của bạn.</span>
			</div>
			<div class="footer-remember">
				<button class="footerBtn btn-success" type="submit" name="btnSuccess" id="btnSuccess">Tiếp tục</button>
			</div>
		</div>
	</div>
</div>
<!-- end Type account -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Account/RemembertypeAccount.js'); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Account.Remember', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>