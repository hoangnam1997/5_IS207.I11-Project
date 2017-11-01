$(document).ready(function(){
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
});