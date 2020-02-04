jQuery(function ($) {
    var fadeStart = 100, fadeUntil = 500, fading = $('.page-scroller');
    var mastHead = $("#masthead nav");
    var postHead = $("#posthead");
    var addSticky = $(".add-sticky");
    var entryTitle = $(".entry-title");

    $(window).bind('scroll', function () {
        var offset = $(document).scrollTop(),
            opacity = 0;

        if (offset <= fadeStart) {
            opacity = 1;
            mastHead.css("background", "rgba(255,255,255,0.3)");

        } else if (offset <= fadeUntil) {
            opacity = 1 - offset / fadeUntil;
            mastHead.css("background", "#FFF");
        }

        if(offset >= 470) {
            postHead.addClass("top-3");
            addSticky.addClass("top-9");
            entryTitle.addClass("top-1");
        } else {
            postHead.removeClass("top-3");
            addSticky.removeClass("top-9");
            entryTitle.removeClass("top-1");
        }

        fading.css('opacity', opacity);
    });


});