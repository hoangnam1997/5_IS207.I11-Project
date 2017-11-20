<?php if(isset($products) && count($products)>0){
				// chạy từng product để in sản phẩm
	foreach ($products as $value) { ?>
	<!-- item product -->
	<div class="col-md-3 item-product" title="<?php echo $value['Name'] ?>">
		<figure class="product">
			<!-- picture product -->
			<div class="image">
				<?php 
				$imgs= $value->Pictures()->get()->toArray();
				if(count($imgs)>0){
					$img = $imgs[0]['Url']; ?>
					<img src="<?php echo url('public/images/'); ?><?php echo  '/'.$img?>" class="clickDetail">
					<?php 
				}  ?>
				<a href="#" class="add-to-cart">Add to Cart</a>
			</div>
			<!-- Name and price -->
			<figcaption class="clickDetail">
				<!-- name prodyct -->
				<h2><?php echo substr($value['Name'],0,22).' ...' ?></h2>
				<!-- price -->
				<div class="price"><?php
				$price=	$value->Prices()->whereNull('endDate')->get(); 
				if(count($price)>0){
					echo $price[0]['Price']." VNĐ";
				} 
				?> </div>
			</figcaption>
		</figure>
	</div>
	<?php
}
}else {
	echo "Không tìm thấy sản phẩm nào!";
}
if(!isset($seeMore) || !$seeMore){?>
<script type="text/javascript">
	$('#seeMoreProduct').remove();
</script>
<?php
}
?>
