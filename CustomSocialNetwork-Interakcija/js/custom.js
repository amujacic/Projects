var menuState = 1;
$(document).ready(function(){
 // Side Menu Opener Starts
    $('#opener').click(function(){

        var subLevel = $('#subLevel');
        var activeMenu = $('.active-menu-item');

        if(subLevel.hasClass('active-sub-level')){

            if(activeMenu.length > 0){

                activeMenu.removeClass('active-menu-item background-color');
                subLevel.children('ul').fadeOut('fast');

            }

            subLevel.removeClass('active-sub-level');
            $(this).children('div').removeClass('opener-minus').addClass('opener-plus');

        }else{

            subLevel.addClass('active-sub-level');
            $(this).children('div').removeClass('opener-plus').addClass('opener-minus');

        }

    });
    // Side Menu Opener Ends
  widthCalc();
    // Responsive Menu Starts
    $('ul#menu > li > .menu-specs > a').on('click touchend',function(e){


        var link        = $(this).attr('href');
        var li          = $(this).parent('div').parent('li');
        var regExp      = /\#/g;
        var bodyWidth   = parseInt( $('body').css('width').replace('px') );

        if(regExp.test(link)){

            if(bodyWidth > 800){

                if(!li.hasClass('active-menu-item')){

                    $('.active-menu-item').removeClass('active-menu-item background-color');
                    li.addClass('active-menu-item background-color');

                    if($('.active-sub-level').length < 1){

                        $('#opener').click();

                    }

                    $('.active-sub-level ul').hide();
                    $(link).fadeIn()

                }

            }else{

                if(li.children('ul').css('display') == 'block'){
                    li.children('ul').slideUp();
                }else{
                    $('ul#menu > li > ul').slideUp();
                    li.children('ul').slideDown();
                }

            }

            e.preventDefault();

        }

    });
    // Responsive Menu Ends

   

 
  
    

});

// Tab Switcher Starts


$(window).load(function(){

   $('body').css('visibility','visible');  

});

$(window).resize(function(){

    widthCalc();

    
});

function widthCalc(){

    if($('body').width() < 801){
        $('.rightSide').css('width','100%').css('width',($('body').width()-10)+'px');
    }else{
        $('.rightSide').css('width','100%').css('width',($('body').width()-255)+'px');
    }

    $('#menu > li > ul > li').css('width', ($('#menu > li').width()-20) +'px');
    $('#subLevel').css('height', '100%').css('height','-=5px');
    $('.lines').css('width', '100%').css('width','-=275px');
    $('.gray-box').css('width', '100%').css('width','-=40px');
    $('.gray-box-input').css('width', '100%').css('width','-=227px');    
    $('.footer').css('width', '100%').css('width','+=10px');
    $('.message-box').css('width', '100%').css('width','-=5px');
    $('.message-text').css('width', '100%').css('width','-=80px');
    

}

function closeThis(menu){
    menu.slideUp();
}

function zatvori(){

        var subLevel = $('#subLevel');
		var chat = $('#opener');
        var activeMenu = $('.active-menu-item');

        if(subLevel.hasClass('active-sub-level')){

            if(activeMenu.length > 0){

                activeMenu.removeClass('active-menu-item background-color');
                subLevel.children('ul').fadeOut('fast');				

            }

            subLevel.removeClass('active-sub-level');
            chat.children('div').removeClass('opener-minus').addClass('opener-plus');

        }

};
