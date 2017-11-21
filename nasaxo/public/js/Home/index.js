// lây danh sách products
function GetProducts(){
    var _token = $('meta[name="_token"]').attr('content');
    urlAjax = url +'/GetViewProducts';
    $.ajax({
        url: urlAjax,
        type:"POST",
        data:{'_token':_token,'pageList':pageProduct.pageList,'numberRecord':pageProduct.numberRecord,'productCategory':pageProduct.productCategory,'nameProduct':pageProduct.nameProduct},
        success: function($re){
            $('#productList').append($re);
        }
    });
}
function clear(){
    $('#txtSearch').val('');
    pageProduct.pageList=0;
    pageProduct.numberRecord=12;
    pageProduct.productCategory='';
    pageProduct.nameProduct ='';
}
$(document).ready(function(){
    var modelContent =$('#homeModal .modal-body');
    // scroll button back to top
    $(window).scroll(function(){
        if($(this).scrollTop() > 400){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    // easing scroll
    $('#scroll').on('click',function(){
        $("html, body").animate({
            scrollTop : 4},
            500,'easeOutQuint');
    });
    // thực hiện gọi form về login
    $('#btnLogin').on('click',function(){
        var urlAjax=url+'/login';
        $.ajax({
            url: urlAjax,
            cache: false,
            success: function($data){
                $(modelContent).html($data);
            }
        });
    });
    // thực hiện tìm kiếm sản phẩm với tên
    $('#btnSearch').on('click',function(){
        $('#productList').html('');
        clear();
        pageProduct.nameProduct = $('#txtSearch').val();
        GetProducts();
    });
    // khi nhấp enter trên thanh tìm kiếm
    $('#txtSearch').on('keypress',function(e){
        if (e.which == 13) {
            $('#btnSearch').click();
        }
    });
    // LẤY DANH SÁCH THEO MỤC
    $('.category-home').on('click',function(){
        $('#productList').html('');
        clear();
        pageProduct.productCategory=$(this).data('category');
        GetProducts();
    });
});
