
<?php if(count($errors)>0): ?>
<ul>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li>
		<?php echo $err; ?>

	</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<form enctype='multipart/form-data' action="<?php echo route('fmrAdd'); ?>" method="POST" name="frmThem">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="txtName"><?php echo $errors->first('txtName'); ?>

			</td>
		</tr>
		<tr>
			<td>Pass</td>
			<td><input type="passwork" name="txtPass"><?php echo $errors->first('txtPass'); ?></td>
			
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="txtDescription"><?php echo $errors->first('txtDescription'); ?></td>
			
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="txtImage"><?php echo $errors->first('txtImage'); ?></td>
			
		</tr>
	</table>
	<input type="submit" value="add"></td>
</form>