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
			"text": "<input disabled type='color' value='#Color#'>"
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
	$('.editColor').attr('data-toggle','modal');
	$('.editColor').attr('data-target','#colorModal');
}
var inat = $("#table-content").PagingTable(columnFormat,listDataTable,pageLoaded);
