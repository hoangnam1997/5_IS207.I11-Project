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
function pageLoaded(){
	$('.editProductCategory').attr('data-toggle','modal');
	$('.editProductCategory').attr('data-target','#ProductCategoryModal');
}
var inat = $("#table-content").PagingTable(columnFormat,listDataTable,pageLoaded);
