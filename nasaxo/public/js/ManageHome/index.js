$('.treeview-menu>li').on('click',function(){
	$('.treeview-menu>li').removeClass('active');
	$(this).addClass('active');
});
$('.sidebar-menu>li').on('click',function(){
	$('.sidebar-menu>li').removeClass('active');
	$(this).addClass('active');
});