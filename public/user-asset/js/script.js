var menuTop = $('#myMenu2').position();


$(window).scroll(function () {
    var scrollPosition = $(window).scrollTop();
    //$('#scrollPosition').html(x);
    if(scrollPosition > menuTop.top){
        $('#myMenu2').css({
            'position' : 'fixed',
            'top' : '0px',
            'width' : '100%',
            'margin-left': '-15px',
            'background-color' : 'orangered',
            'z-index' : '99'
        });
    }
    else {
        $('#myMenu2').css({
            'position' : 'static',
            'background-color' : 'transparent'
        });
    }
});