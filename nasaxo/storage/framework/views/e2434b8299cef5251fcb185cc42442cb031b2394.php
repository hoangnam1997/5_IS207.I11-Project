<!-- start Rfind account -->

<?php $__env->startSection('content'); ?>
<div name="frmFind">
	<div class="rememver-content">
		<div class="infomation-content">
			<h4>Tìm tài khoản của bạn</h4>
			<div class="find-content">
				<span class="Remember-email">Vui lòng nhập tên tài khoản hoặc email </span>
				<input class="txtInputRemember" type="text" name="txtEmail" id="txtEmailRemember" >
			</div>
			<div class="footer-remember">
				<button class="footerBtn btn-success " name="btnSuccess" id="btnSuccess">Tìm kiếm</button>
			</div>
		</div>
	</div>
</div>
<!-- end find account -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Account/RememberFindAccount.js'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Account.Remember', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>