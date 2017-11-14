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
			// "class": "",
			"text": "#Name#"
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
