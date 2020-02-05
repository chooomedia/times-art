jQuery(function($) {
    $(".post-img").hover(function() {
        $(this).find(".post-img-p").addClass("scale");        
     }, function () {
        $(this).find(".post-img-p").removeClass("scale");
    });
});