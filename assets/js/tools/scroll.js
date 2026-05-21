$(window).scroll(function() { 
    var scroll = $(window).scrollTop();

    if ($(window).width() < 641){
        if ((scroll < 50)&&(scroll >= 0)){
            $('header .top-header').show(250);
            $('main').css('margin-top', '95px');
        }else{
            $('main').css('margin-top', '0px');
            $('header .top-header').hide(250);
        }
    }else if ($(window).width() < 689 ){
        if ((scroll < 50)&&(scroll >= 0)) {
            $('header .top-header').show(250);
            $('main').css('margin-top', '100px');
        }   
        else {
            $('main').css('margin-top', '0');
            $('header .top-header').hide(250);
        }
    }else if ($(window).width() >= 1061 ){
        if ((scroll < 50)&&(scroll >= 0)) {
            $('header .top-header').show(250);
            $('main').css('margin-top', '100px');
        }
        else {
            $('header .top-header').hide(250);
            $('main').css('margin-top', '0');
        }
    }
});