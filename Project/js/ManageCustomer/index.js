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
			"text": "#Email#"
		},{
			// "class": "",
			"text": "#DeliveryPlace#<button class='btn btn-link btnDetailDeliveryPlace'>Chi tiết</button>"
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
		$('.sendEmail').attr('data-toggle','modal');
		$('.sendEmail').attr('data-target','#CustomerModal');
	}
	var inat = $("#table-content").PagingTable(columnFormat,listDataTable,pageLoaded);
