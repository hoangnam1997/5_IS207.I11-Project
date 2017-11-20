<!-- table-sort -->
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/table-sort/PagingTable.css'); ?>">
<!-- my custom -->
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/ManageColor/index.css'); ?>">
<!-- Modal -->
<div class="modal fade" id="colorModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Thông tin màu sắc</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" action="">
					<div class="form-group">
						<label class="control-label col-sm-2" for="color">Màu sắc:</label>
						<div class="col-xs-10">
							<input type="color" class="form-control" id="color" name="color" value="#ffffff">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd">Mô tả:</label>
						<div class="col-sm-10"> 
							<div class="input-group col-sm-12">
								<span class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></span>
								<textarea class="form-control txtDescription" id="inputDescriotion" placeholder="Nhập mô tả màu sắc"></textarea>
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
<div class="container-fluid">

	<!-- start row -->
	<div class="row">
		<div class="col-xs-12 header-content">
			<div class="col-md-4">
				<!-- add buttom -->
				<button id="btnAdd" class="btn btn-info" data-toggle="modal" data-target="#colorModal">+</button>
				<div class="form-inline">
					<div class="form-group pull-left col-md-12">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Mô tả màu sắc...">
							<div class="btn btn-default input-group-addon">
								<i class="glyphicon glyphicon-search"></i>
							</div>
						</div>
					</div>
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
						<th class="table-Sort" data-sort="STT" style="width: 25%;">STT</th>
						<th style="width: 25%;">Màu sắc</th>
						<th class="table-Sort" data-sort="Description" style="width: 25%;">Mô tả</th>
						<th style="width: 25%;"></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<!-- end table -->
			<!-- start footer table -->
			<div class="Table-Pagination pull-right">
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
    		"Color":"#513192",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"2",
    		"Color":"#391111",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-reply fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"3",
    		"Color":"#F76767",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-reply fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"4",
    		"Color":"#ffff22",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-reply fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"5",
    		"Color":"#1C0303",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"6",
    		"Color":"#7DB828",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"7",
    		"Color":"#5B5E12",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"8",
    		"Color":"#58FA00",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"9",
    		"Color":"#2511BA",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"10",
    		"Color":"#C721B9",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"11",
    		"Color":"#10D8D6",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    },{
    	"data":{
    		"STT":"12",
    		"Color":"#ffffff",
    		"Description":"Mô tả",
    		"Action":"<i class='editColor fa fa-pencil-square-o fa-2x' aria-hidden='true'></i><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>"
    	},
    	"flag":0
    }];
    
</script>
<!-- table sort -->
<script type="text/javascript" src="<?php echo url('public/js/table-sort/PagingTable.js'); ?>"></script>
<!-- script custom js -->
<script type="text/javascript" src="<?php echo url('public/js/ManageColor/index.js'); ?>"></script>
<!-- data table -->

