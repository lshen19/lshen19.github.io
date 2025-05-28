$(document).ready(function(){

     // cookie banner close button //
     $("#cookieclosebutton").click(function(){
        $("#cookiebanner").hide();
        });

    // cookie banner accept button //
    $("#accept").click(function(){
        localStorage.setItem('cookiesAccepted', 'true');
        $("#cookiebanner").animate({
            "bottom" : "-=250px"
        }, 1000);
    });

    // cookie banner deny button // 
    $("#deny").click(function(){
        localStorage.setItem('cookiesAccepted', 'false');
        $("#cookiebanner").animate({
            "bottom" : "-=250px"
        }, 1000);
    });

});