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
    
});
