// functions are written here

$(window).scroll(function(){
    if($(this).scrollTop() >= 1)
        $('nav').addClass('scrolled');
    else $('nav').removeClass('scrolled');
});