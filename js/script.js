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

    $(".navbar a, footer a").on("click", function(event){
    
        event.preventDefault();
        var hash = this.hash;
        
        $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})
        
    });

// formulaire contact

    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();
        console.log(postdata);
        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                console.log(json.isSuccess);
                console.log($.ajax["url"]);
               
                 
                if(json.isSuccess) 
                {
                    $('#contact-form').append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>");
                    $('#contact-form')[0].reset();
                }
                else
                {
                    $('#firstname + .comments').html(json.firstnameError);
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#message + .comments').html(json.messageError);
                }                
            }
        });
    });

    $(".view a").mouseover(function(){
        $(this).find('span.bgk').hide().stop().fadeTo(500,0.7);
        $(this).find('span.title').hide().stop().fadeTo(500,0.7);
        
    });

})