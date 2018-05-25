// functions are written here

$(function () {
    /*Animate function*/
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default)
        animateClass: 'animated', //animation css class (default)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animation on mobile device (default is true)
        live: true, //act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started the argument that is
            // passed in is the DOM node being animated
        },
        scrollContainer: null //optional scroll container selector, otherwise use window
    });
    wow.init();

    //function to trigger the nav position
    $(window).scroll(function(){
        if($(this).scrollTop() >= 1)
            $('nav').addClass('scrolled');
        else $('nav').removeClass('scrolled');
    });
});