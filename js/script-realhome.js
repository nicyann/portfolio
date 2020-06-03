console.log("tests");

$(function(){
    $(".htmlcss").animate({
            width:'85%'
    }, 3000);
});
$(function(){
    $(".boot").animate({
            width:'70%'
    }, 3000);
});
$(function(){
    $(".javasc").animate({
            width:'60%'
    }, 3000);
});
$(function(){
    $(".react").animate({
            width:'40%'
    }, 3000);
});
$(function(){
    $(".php").animate({
            width:'65%'
    }, 3000);
});
$(function(){
    $(".symfony").animate({
            width:'40%'
    }, 3000);
});
$(function(){
    $(".wordpress").animate({
            width:'50%'
    }, 3000);
});
$(function(){
    $(".anglais").animate({
            width:'37%'
    }, 3000);
});
$(function(){
    $(".allemand").animate({
            width:'30%'
    }, 3000);
});

// animation footer

$(function(){



// formulaire contact


    $(".view a").mouseover(function(){
        $(this).find('span.bgk').hide().stop().fadeTo(500,0.7);
        $(this).find('span.title').hide().stop().fadeTo(500,0.7);
        $(this).find('span.project').hide().stop().fadeTo(500,0.1);
        
    });
    $(".right-wrapper .view a").mouseover(function(){
        $(this).find('span.bgk').hide().stop().fadeTo(500,0.9);
        $(this).find('span.title').hide().stop().fadeTo(500,0.9);
     
        
    });

})