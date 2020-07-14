jQuery(function($) {
    var canvasWrapper = $("#canvasWrapper");
    var portfolioBox = $(".post-img");
    var headerThumb = $(".header-thumbnail");
    var blockImg = $(".wp-block-image img");

    var page = $("#page");

    var isMousemove = false;

    page.on("mousemove", function (event) {
        isMousemove = true;
    });

    page.mousestop(function() {
        canvasWrapper.addClass("no-color");
        portfolioBox.addClass("no-color");
        headerThumb.addClass("no-color");
        blockImg.addClass("no-color");
    });

    page.on("mousemove", function (event) {
        if (isMousemove) {
            canvasWrapper.removeClass("no-color");
            portfolioBox.removeClass("no-color");
            headerThumb.removeClass("no-color");
            blockImg.removeClass("no-color");
        }
    });
});