jQuery(function($) {
    $(".post-img").hover(function() {
        $(this).find(".post-img-p").addClass("slide");        
     }, function () {
        $(this).find(".post-img-p").removeClass("slide");
    });
});