
<!-- table-sort -->
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/table-sort/PagingTable.css'); ?>">
<!-- my custom -->
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/ManagePromotion/index.css'); ?>">
<body>
	<!-- Modal -->
	<div class="modal fade" id="ProductModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content product-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Thông tin Khuyến mãi</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="">
						<div class="form-group">
							<div class="col-xs-12">
								<img class="input-Img" src="<?php echo url('public/images/carouse_2.jpg'); ?>">
								<input type="file" class="form-control" id="productPicture" name="productPicture" style="display: none;">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="productStartDate">Ngày bắt đầu:</label>
							<div class="col-xs-9">
								<div class="input-group col-sm-12">
									<span class="input-group-addon"><i class="fa fa-tags" aria-hidden="true"></i></span>
									<input type="date" class="form-control" id="productStartDate" name="productStartDate">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="productEndDate">Ngày kết thúc:</label>
							<div class="col-xs-9">
								<div class="input-group col-sm-12">
									<span class="input-group-addon"><i class="fa fa-tags" aria-hidden="true"></i></span>
									<input type="date" class="form-control" id="productEndDate" name="productEndDate">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="promotionName">Tên:</label>
							<div class="col-xs-9">
								<div class="input-group col-sm-12">
									<span class="input-group-addon"><i class="fa fa-tags" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="promotionName" name="promotionName" value="Khuyến mãi" placeholder="Nhập thông tin Khuyến mãi">
								</div>
							</div>
						</div>
						<div class="form-group" title="Số tiền ít nhất để đạt khuyến mãi">
							<label class="control-label col-sm-3" for="promotionBasePureChase" >Yêu cầu:</label>
							<div class="col-xs-9">
								<div class="input-group col-sm-12">
									<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="promotionBasePureChase" name="promotionBasePureChase" value="20.000đ" placeholder="Nhập giá">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="promotionDiscount">Giảm giá:</label>
							<div class="col-xs-9">
								<div class="input-group col-sm-12">
									<span class="input-group-addon"><i class="fa fa-bomb" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="promotionDiscount" name="promotionDiscount" value="5" placeholder="Nhập khuyến mãi (%)">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="pwd">Mô tả:</label>
							<div class="col-sm-9"> 
								<div class="input-group col-sm-12">
									<span class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></span>
									<textarea class="form-control txtDescription" id="inputDescriotion" placeholder="Nhập mô tả Khuyến mãi"></textarea>
								</div>        
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Chấp nhận</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
				</div>
			</div>

		</div>
	</div>
	<!-- end modals -->
	<!-- start container -->
	<div class="container-fluit">
		<!-- start row -->
		<div class="row">
			<div class="col-xs-12 header-content">
				<div class="col-md-4">
					<button id="btnAdd" class="btn btn-info" data-toggle="modal" data-target="#ProductModal">+</button>
					<div class="form-inline col-md-12">
						<div class="form-group pull-left col-md-12">
							<div class="input-group">
								<input id="inputCategorySearch" type="text" class="form-control" placeholder="Khuyến mãi...">
								<div class="btn btn-default input-group-addon">
									<i class="glyphicon glyphicon-search"></i>
								</div>
							</div>
						</div>
						<!-- add buttom -->
						<input type="checkbox" id="checkIsDelete">
						<label id="lblCheckIsDelete"for="checkIsDelete" title="Hiển thị danh sách đã xóa">Hiển thị tất cả</label>
					</div>
				</div>
			</div>
			<!-- start table -->
			<div id='table-content' class="table-content col-xs-12">
				<!-- count entries -->
				<label class="pull-left">Show
					<select  class="input-sm Pagin-ShowEntries">
						<option value="5">5</option>
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select>
					entries
				</label>
				<!--end count entries -->
				<!-- start search -->
				<div class="pull-right">
					<div class="form-inline">
						<div class="form-group pull-right">
							<div class="input-group">
								<input type="text" class="form-control Pagin-inputSearch" placeholder="Tìm kiếm...">
								<div class="btn btn-default input-group-addon Pagin-btnSearch">
									<i class="glyphicon glyphicon-search"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end search -->
				<!-- start table -->
				<table class="Table-Pagin table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th class="table-Sort" data-sort="STT" style="width: 10%;">STT</th>
							<th class="table-Sort" data-sort="StartDay" style="width: 12%;">Ngày bắt đầu</th>
							<th class="table-Sort" data-sort="EndDay" style="width: 12%;">Ngày kết thúc</th>
							<th class="table-Sort" data-sort="Name" style="width: 16%;">Tên</th>
							<th class="table-Sort" data-sort="Discount" style="width: 10%;">Giảm giá (%)</th>
							<th class="table-Sort" data-sort="BasePurchare" style="width: 16%;" title="Số tiền ít nhất để đạt khuyến mãi">Yêu cầu</th>
							<th class="table-Sort" data-sort="Description" style="width: 14%;">Mô tả</th>
							<th style="width: 10%;"></th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<!-- end table -->
				<!-- start footer table -->
				<div class="Table-Pagination">
				</div>
				<!-- end footer table -->
			</div>
			<!-- end table -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
	<script type="text/javascript">
	// set attr of col in table
	
    // set data of table
    var listDataTable = [{
    	"data":{
    		"STT":"1",
    		"StartDay":"01/01/2017",
    		"EndDay":"01/01/2017",
    		"Name":"Khuyến mãi 1",
    		"Discount":"5",
    		"BasePurchare":"15000",
    		"Description":"Mô tả",
    		"Action":"<i class='editProductCategory fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"2",
    		"StartDay":"01/01/2017",
    		"EndDay":"01/01/2017",
    		"Name":"Khuyến mãi 2",
    		"Discount":"6",
    		"BasePurchare":"15000",
    		"Description":"Mô tả",
    		"Action":"<i class='editProductCategory fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-reply fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"3",
    		"StartDay":"01/01/2017",
    		"EndDay":"01/01/2017",
    		"Name":"Khuyến mãi 3",
    		"Discount":"7",
    		"BasePurchare":"15000",
    		"Description":"Mô tả",
    		"Action":"<i class='editProductCategory fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-reply fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"4",
    		"StartDay":"01/01/2017",
    		"EndDay":"01/01/2017",
    		"Name":"Khuyến mãi 4",
    		"Discount":"5",
    		"BasePurchare":"15000",
    		"Description":"Mô tả",
    		"Action":"<i class='editProductCategory fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-reply fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"5",
    		"StartDay":"01/01/2017",
    		"EndDay":"01/01/2017",
    		"Name":"Khuyến mãi 5",
    		"Discount":"5",
    		"BasePurchare":"15000",
    		"Description":"Mô tả",
    		"Action":"<i class='editProductCategory fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"6",
    		"StartDay":"01/01/2017",
    		"EndDay":"01/01/2017",
    		"Name":"Khuyến mãi 6",
    		"Discount":"5",
    		"BasePurchare":"15000",
    		"Description":"Mô tả",
    		"Action":"<i class='editProductCategory fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    }];
    
</script>
<!-- table sort -->
<script type="text/javascript" src="<?php echo url('public/js/table-sort/PagingTable.js'); ?>"></script>
<!-- script custom js -->
<script type="text/javascript" src="<?php echo url('public/js/ManagePromotion/index.js'); ?>"></script>
