<!-- start Rfind account -->

<?php $__env->startSection('content'); ?>
<form enctype='multipart/form-data' action="<?php echo url('remember/type'); ?>" name="frmFind" method="POST">
	<?php echo e(csrf_field()); ?>	
	<div class="rememver-content">
		<div class="infomation-content">
			<h4>Tìm tài khoản của bạn</h4>
			<div class="find-content">
				<span class="Remember-email">Vui lòng nhập tên tài khoản hoặc email để tìm kiếm tài khoản</span>
				<input class="txtInputRemember" type="text" name="txtEmail" id="txtEmail" placeholder="Tên tài khoản hoặc email">
			</div>
			<div class="footer-remember">
				<button class="footerBtn btn-success " type="submit" name="btnSuccess" id="btnSuccess">Tìm kiếm</button>
				<button class="footerBtn btn-cancel" type="button" name="btnCancel" id="btnCancel">Hủy</button>
			</div>
		</div>
	</div>
</form>
<!-- end find account -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Account/RememberFindAccount.js'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Account.Remember', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>