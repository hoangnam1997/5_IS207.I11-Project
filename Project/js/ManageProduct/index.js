// create by namnh
// create table from data listDataTable 
var columnFormat = {
	"tr": {
			// "class": "col"
		},
		"td": [{
			// "class": "",
			"text": "#STT#"
		},{
			"class":"positionLeft",
			"text": "#Picture#"
		},{
			// "class": "",
			"text": "#Name#"
		},{
			// "class": "",
			"text": "#ProductCategory#"
		},{
			// "class": "",
			"text": "#Price#<label class='lable-detail' data-detail='#STT#'>Chi tiết</label>"
		},{
			// "class": "",
			"text": "#Description#"
		},{
			// "class": "",
			"text": "#Action#"
		}
		]
	};
// list dataTalePrice
var listDataTablePrice = [{
	"data":{
		"STT":"1",
		"StartDay":'01/01/0001',
		"EndDay":"01/01/0001",
		"Price":"20.000đ",
		"Discount":"5%",
	},
	"flag":0
},{
	"data":{
		"STT":"2",
		"StartDay":'01/01/0001',
		"EndDay":"01/01/0001",
		"Price":"20.000đ",
		"Discount":"5%",
	},
	"flag":0
},{
	"data":{
		"STT":"3",
		"StartDay":'01/01/0001',
		"EndDay":"01/01/0001",
		"Price":"20.000đ",
		"Discount":"5%",
	},
	"flag":0
},{
	"data":{
		"STT":"4",
		"StartDay":'01/01/0001',
		"EndDay":"01/01/0001",
		"Price":"20.000đ",
		"Discount":"5%",
	},
	"flag":0
},{
	"data":{
		"STT":"5",
		"StartDay":'01/01/0001',
		"EndDay":"01/01/0001",
		"Price":"20.000đ",
		"Discount":"5%",
	},
	"flag":0
},{
	"data":{
		"STT":"6",
		"StartDay":'01/01/0001',
		"EndDay":"01/01/0001",
		"Price":"20.000đ",
		"Discount":"5%",
	},
	"flag":0
},{
	"data":{
		"STT":"7",
		"StartDay":'01/01/0001',
		"EndDay":"01/01/0001",
		"Price":"20.000đ",
		"Discount":"5%",
	},
	"flag":0
}];
// columnFormat for price
var columnFormatPrice = {
	"tr": {
			// "class": "col"
		},
		"td": [{
			// "class": "",
			"text": "#STT#"
		},{
			"text": "#StartDay#"
		},{
			// "class": "",
			"text": "#EndDay#"
		},{
			// "class": "",
			"text": "#Price#"
		},{
			// "class": "",
			"text": "#Discount#"
		}
		]
	};
//function onclick detail 
function onClickDetail(){
	$("#tablePrice").PagingTable(columnFormatPrice,listDataTablePrice);
}
function pageLoaded(){
	$('.editProductCategory').attr('data-toggle','modal');
	$('.editProductCategory').attr('data-target','#ProductModal');
	$('.lable-detail').attr('data-toggle','modal');
	$('.lable-detail').attr('data-target','#PriceDetailModal');
	$('.lable-detail').on('click',function(){
		onClickDetail();
	});
}
// remove picture
function RemovePictureEvent(elemtne){
	$(elemtne).find('.removeImg').on('click',function(){
		$(this).parent().remove();
	});
}
var inat = $("#table-content").PagingTable(columnFormat,listDataTable,pageLoaded);
// function onclick change image
$('.input-Img').on('click',function(){
	$(this).parent().find('input[type=file]').click();
});
// function when input file changes
$('input[type=file]').on('change',function(e){
	groupPicture = $(this).parent().find('.groupPicture');
	var files = e.target.files; //FileList object
	$.each(files, function(i, file) {
		var pReader = new FileReader(); 
		pReader.addEventListener("load", function(ePicture){
			var pic = ePicture.target;  // 1 file              
			groupPicture.append('<div class="item-picture"><img class="img-product-edit" src="' + pic.result + '"/><span title="Bỏ hình ảnh" class="removeImg"><i class="fa fa-window-close-o" aria-hidden="true"></i></span></div>');
			RemovePictureEvent(groupPicture);
		});
		if(file['type'].split('/')[0]=='image'){
			pReader.readAsDataURL(file);
		}
	});
	$(this).val('');
});
