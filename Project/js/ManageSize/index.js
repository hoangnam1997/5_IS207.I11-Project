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
			"text": "<input class='inputSize' disabled type='text' value='#Size#'>"
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
	$('.editSize').attr('data-toggle','modal');
	$('.editSize').attr('data-target','#sizeModal');
}
var inat = $("#table-content").PagingTable(columnFormat,listDataTable,pageLoaded);
