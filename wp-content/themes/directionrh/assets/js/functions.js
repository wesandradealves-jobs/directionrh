function mobileNavigation(e) {
	$(e).toggleClass('is-active');
    $('.mobile-navigation .navigation').toggleClass('toggle');
}
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function soLetras(v){
    return v.replace(/\d/g,"") //Remove tudo o que não é Letra
}
function sticky(string){
    var string = $(string);
    string.before(string.clone(true).addClass("sticky"));
    $(window).scroll(function(t) {
        var a = $(window).scrollTop();
        if(a>$('header').outerHeight())
            $('.sticky').addClass("stuck")
        else 
            $('.sticky').removeClass("stuck")
    })	
}
$(document).mouseup(function (e)
{
    var container = $('.social').children();

    if (!container.is(e.target) 
        && container.has(e.target).length === 0)
    {
        $('.social ul, .social p').removeClass('toggle')
    }
});  
$(document).ready(function () {
	$('.telefone').mask('(00) 00000-0000');
	sticky('.header');
    $( ".toggle-social" ).click(function() {
        $(this).prev().toggleClass('toggle');
    	$(this).next().toggleClass('toggle');
    }); 	
    $('.bxslider').bxSlider({
        pager: false,
        adaptiveHeight: true,
        nextText: '<i class="fal fa-angle-right"></i>',
        prevText: '<i class="fal fa-angle-left"></i>'
    });     
});
      
      