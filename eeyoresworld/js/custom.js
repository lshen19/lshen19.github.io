$(document).ready(function(){
    
    // lightbox close button //
    $("#lb_closebutton").click(function(){
        $("#lightbox").hide();
    });

    // cookie banner close button //
    $("#cookieclosebutton").click(function(){
        $("#cookiebanner").animate({
            "bottom" : "-=250px"
        }, 1000);
    });

    // action buttons //
    var button; 

    $("#brood").click(function() {
        button = "brood";
    });

    $("#mope").click(function() {
        button = "mope";
    });

    $("#wallow").click(function() {
        button = "wallow";
    });


    // function to add image to lightbox //
    function imglightbox() {
        var imgSrc;
        if (button === "brood") {
            imgSrc = 'css/img/brood.jpeg';
        } else if (button === "mope") {
            imgSrc = 'css/img/mope.jpeg';
        } else if (button === "wallow") {
            imgSrc = 'css/img/wallow.jpeg';
        }

        var imgElement = $('<img>', {
            'src': imgSrc
        });

        imgElement.css('width', '400px'); 

        $("#lb_txt").html(imgElement);

    }

    $(".actionbutton").click(function(){
        $("#lightbox").css("display", "flex");
        imglightbox();
    });


    // NEWSLETTER //
    

})