<!-- table-sort -->
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/table-sort/PagingTable.css'); ?>">
<!-- my custom -->
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/ManageCustomer/index.css'); ?>">
<!-- Modal -->
<div class="modal fade" id="CustomerModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content Customer-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Nội dung tin nhắn</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" action="">
					<div class="form-group">
						<label class="control-label col-sm-3" for="pwd">Mô tả:</label>
						<div class="col-sm-9"> 
							<div class="input-group col-sm-12">
								<span class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></span>
								<textarea class="form-control txtDescription" id="inputDescriotion" placeholder="Nhập nội dung tin nhắn"></textarea>
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
				<div class="form-inline col-md-12">
					<div class="form-group pull-left col-md-12">
						<div class="input-group">
							<input id="inputCategorySearch" type="text" class="form-control" placeholder="Khách hàng...">
							<div class="btn btn-default input-group-addon">
								<i class="glyphicon glyphicon-search"></i>
							</div>
						</div>
					</div>
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
						<th class="table-Sort" data-sort="Name" style="width: 20%;">Tên khách hàng</th>
						<th class="table-Sort" data-sort="Email" style="width: 20%;">Thư điện tử</th>
						<th class="table-Sort" data-sort="DeliveryPlace" style="width: 20%;">Địa chỉ giao hàng</th>
						<th class="table-Sort" data-sort="Description" style="width: 20%;">Mô tả</th>
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
    		"Name":"Ngọc",
    		"Email":"123@gmail.com",
    		"DeliveryPlace":"Địa chỉ 1",
    		"Description":"Mô tả",
    		"Action":"<i class='sendEmail fa fa-paper-plane fa-2x' aria-hidden='true' title='Gửi tin nhắn'>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"2",
    		"Name":"Thanh",
    		"Email":"123@gmail.com",
    		"DeliveryPlace":"Địa chỉ 2",
    		"Description":"Mô tả",
    		"Action":"<i class='sendEmail fa fa-paper-plane fa-2x' aria-hidden='true' title='Gửi tin nhắn'>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"3",
    		"Name":"Hường",
    		"Email":"123@gmail.com",
    		"DeliveryPlace":"Địa chỉ 3",
    		"Description":"Mô tả",
    		"Action":"<i class='sendEmail fa fa-paper-plane fa-2x' aria-hidden='true' title='Gửi tin nhắn'>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"4",
    		"Name":"Nam",
    		"Email":"123@gmail.com",
    		"DeliveryPlace":"Địa chỉ 4",
    		"Description":"Mô tả",
    		"Action":"<i class='sendEmail fa fa-paper-plane fa-2x' aria-hidden='true' title='Gửi tin nhắn'>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"5",
    		"Name":"Nử",
    		"Email":"123@gmail.com",
    		"DeliveryPlace":"Địa chỉ 4",
    		"Description":"Mô tả",
    		"Action":"<i class='sendEmail fa fa-paper-plane fa-2x' aria-hidden='true' title='Gửi tin nhắn'>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"6",
    		"Name":"Dương",
    		"Email":"123@gmail.com",
    		"DeliveryPlace":"Địa chỉ 5",
    		"Description":"Mô tả",
    		"Action":"<i class='sendEmail fa fa-paper-plane fa-2x' aria-hidden='true' title='Gửi tin nhắn'>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"7",
    		"Name":"Đông",
    		"Email":"123@gmail.com",
    		"DeliveryPlace":"Địa chỉ 6",
    		"Description":"Mô tả",
    		"Action":"<i class='sendEmail fa fa-paper-plane fa-2x' aria-hidden='true' title='Gửi tin nhắn'>"
    	},
    	"flag":0
    }];
    
</script>
<!-- table sort -->
<script type="text/javascript" src="<?php echo url('public/js/table-sort/PagingTable.js'); ?>"></script>
<!-- script custom js -->
<script type="text/javascript" src="<?php echo url('public/js/ManageCustomer/index.js'); ?>"></script>
