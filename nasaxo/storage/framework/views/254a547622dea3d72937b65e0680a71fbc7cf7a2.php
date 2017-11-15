<?php $__env->startSection('content'); ?>
<!-- start Type account -->
<form action="<?php echo url('/remember/changepass'); ?>" name="frmFind" method="POST">
	<?php echo e(csrf_field()); ?>	
	<div class="rememver-content">
		<div class="infomation-content">
			<h4>Nhập mã xác nhận</h4>
			<div class="find-content">
				<span class="Remember-email">Vui lòng nhập mã xác nhận</span>
				<input class="txtInputRemember" type="text" name="txtEmail" id="txtEmail" placeholder="Nhập mã">
				<span class="Remember-email">Chúng tôi đã gửi mã xác nhận về <span class="email">15520xxx@gm.uit.edu.vn</span> <span class="reSend">Gửi lại</span></span>
			</div>
			<div class="footer-remember">
				<button class="footerBtn btn-success" type="submit" name="btnSuccess" id="btnSuccess">Tiếp tục</button>
				<button class="footerBtn btn-cancel" type="button" name="btnCancel" id="btnCancel">Hủy</button>
			</div>
		</div>
	</div>
</form>
<!-- end Type account -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##

<?php $__env->stopSection(); ?>


<?php echo $__env->make('Account.Remember', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>