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
					<img src="{!! url('public/images/') !!}<?php echo  '/'.$img?>" class="clickDetail">
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
}?>
<?php 
}else {
	echo "Không tìm thấy sản phẩm nào!";
}
if(isset($seeMore) && $seeMore){
	?>
	<div class='col-md-12 seeMoreProduct' onclick="SeeMore()" id='seeMoreProduct'>Xem thêm</div>
	<script type="text/javascript">
		if(document.getElementById('seeMoreProduct')!=null){
			document.getElementById('seeMoreProduct').style.display = 'block';
		}else{
			var div = document.createElement('div');
			div.setAttribute('class','col-md-12 seeMoreProduct');
			div.setAttribute('style','display:"block";');
			div.setAttribute('id','seeMoreProduct');
			div.setAttribute('onclick','SeeMore()');
			document.appendChild(div);
		}
		function SeeMore(){
			pageProduct.pageList++;
			GetProducts();
		};
	</script>
	<?php
}else{
	?>
	<script type="text/javascript">
		if(document.getElementById('seeMoreProduct')!=null){
			document.getElementById('seeMoreProduct').style.display = 'none';
		}
	</script>
	<?php
}
?>
