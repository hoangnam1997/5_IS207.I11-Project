// create by Nam 29/11/2017
// auto complate distric
function districtsAutocomplete($city){
	$('#district').autocomplete({
		minLenght:3,
		autoFocus:true,
		source: url+'/admin/address/getdistrictsbycity?idCity='+$city,
		select: function(event,ui){
			$('#districtControl').val(ui.item.id);
			wardsAutocomplete(ui.item.id);
		},
	});
	$('#district').off('change').on('change',function(){
		if($(this).val()==''){
			$('#districtControl').val('');
			$('#ward').val('');
			$('#wardControl').val('');
			$('#ward').autocomplete("destroy");
			$('#ward').removeData('autocomplete');
		}
	});
}
// auto complate ward
function wardsAutocomplete($districts){
	$('#ward').autocomplete({
		minLenght:3,
		autoFocus:true,
		source: url+'/admin/address/getwardbydistrict?idDistrict='+$districts,
		select: function(event,ui){
			$('#wardControl').val(ui.item.id);
		},
	});
	$('#ward').off('change').on('change',function(){
		if($(this).val()==''){
			$('#wardControl').val('');
		}
	});
}
// khi sẵn sàng
$(document).ready(function(){
	// autocomplete city
	$('#city').autocomplete({
		minLenght:3,
		autoFocus:true,
		source: url+'/admin/address/getallcity?id=1',
		select: function(event,ui){
			$('#cityControl').val(ui.item.id);
			districtsAutocomplete(ui.item.id);
		},
	});
	// remove when change
	$('#city').off('change').on('change',function(){
		if($(this).val()==''){
			$('#cityControl').val('');
			$('#district').val('');
			$('#districtControl').val('');
			$('#district').autocomplete("destroy");
			$('#district').removeData('autocomplete');
			$('#ward').val('');
			$('#wardControl').val('');
			$('#ward').autocomplete("destroy");
			$('#ward').removeData('autocomplete');
		}
	});

});