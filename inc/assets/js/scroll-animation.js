jQuery(function ($) {
    let fadeStart = 100, fadeUntil = 500, fading = $('.page-scroller'),
        mastHead = $("#masthead nav"),
        postHead = $("#posthead"),
        addSticky = $(".add-sticky"),
        entryTitle = $(".entry-title");


    $(window).bind('scroll', function () {
        let opacity = 0,
            offset = $(document).scrollTop();

        if (offset <= fadeStart) {
            opacity = 1;
            mastHead.css("background", "rgba(255,255,255,0.3)");

        } else if (offset <= fadeUntil) {
            opacity = 1 - offset / fadeUntil;
            mastHead.css("background", "#FFF");
        }

        if (offset >= 470) {
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