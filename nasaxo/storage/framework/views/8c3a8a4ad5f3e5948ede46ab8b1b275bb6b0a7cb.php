<?php $__env->startSection('content'); ?>
<form enctype='multipart/form-data' action="<?php echo url('/'); ?>" name="frmFind" method="POST">
	<?php echo e(csrf_field()); ?>	
	<!-- start change account -->
	<div class="rememver-content">
		<div class="infomation-content">
			<h4>Đặt lại mật khẩu</h4>
			<div class="find-content">
				<span class="Remember-email">Nhập mật khẩu mới từ 8 đến 32 ký tự</span>
				<input class="txtInputRemember" type="password" name="txtEmail" id="txtEmail" placeholder="Nhập mật khẩu">
				<span class="Remember-email">Nhập lại</span>
				<input class="txtInputRemember" type="password" name="txtEmail" id="txtEmail" placeholder="Nhập lại mật khẩu">
			</div>
			<div class="footer-remember">
				<button class="footerBtn btn-success" type="submit" name="btnSuccess" id="btnSuccess">Tiếp tục</button>
				<button class="footerBtn btn-cancel" type="button" name="btnCancel" id="btnCancel">Hủy</button>
			</div>
		</div>
	</div>
	<!-- end change account -->
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Account.Remember', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>