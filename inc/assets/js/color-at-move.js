jQuery(function($) {
    var canvasWrapper = $("#canvasWrapper");
    var portfolioBox = $(".post-img");

    var page = $("#page");

    var isMousemove = false;

    page.on("mousemove", function (event) {
        isMousemove = true;
    });

    page.mousestop(function() {
        canvasWrapper.addClass("no-color");
        portfolioBox.addClass("no-color");
    });

    page.on("mousemove", function (event) {
        if (isMousemove) {
            canvasWrapper.removeClass("no-color");
            portfolioBox.removeClass("no-color");
        }
    });
});