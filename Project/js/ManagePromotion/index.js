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
			"text": "#StartDay#"
		},{
			// "class": "",
			"text": "#EndDay#"
		},{
			// "class": "",
			"text": "#Name#"
		},{
			// "class": "",
			"text": "#Discount# %"
		},{
			// "class": "",
			"text": "#BasePurchare# đ"
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
		$('.editProductCategory').attr('data-target','#ProductModal');
	}
	var inat = $("#table-content").PagingTable(columnFormat,listDataTable,pageLoaded);
	// function onclick change image
	$('.input-Img').on('click',function(){
		$(this).parent().find('input[type=file]').click();
	});
	// function when input file changes
	$('input[type=file]').on('change',function(e){
		imgElement = $(this).parent().find('.input-Img');
		if (this.files && this.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$(imgElement).attr('src', e.target.result);
			}
			if(e.target.files[0]['type'].split('/')[0]=='image'){
				reader.readAsDataURL(this.files[0]);
			}
		}
	});
