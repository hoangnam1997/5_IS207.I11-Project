<?php 
if(isset($hoten)){
	echo 'tets from file views '. $hoten;
}else
{
	echo 'none';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/css.css')); ?>">
</head>
<body>
	<?php $hoten = "Nguyễn Hoàng Nam"; ?>
	<!-- viết gon echo -->
	<?php echo $hoten; ?>

	<!-- section -->
	<?php $__env->startSection('slider'); ?>
	<b>Slide master</b>
	<?php echo $__env->yieldSection(); ?>
	<!-- chèn section -->
	<?php echo $__env->yieldContent('noidung'); ?>
	<!-- điều kiên mệnh đề -->
	<?php if(1): ?>
	ahihi
	<?php endif; ?>
	<hr>
	<?php echo isset($name)? $name : "Không tồn tại"; ?>

	<hr>
	<?php echo isset($name) ? $name : "Không tồn tại"; ?>

	
</body>
</html>