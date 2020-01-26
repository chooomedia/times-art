jQuery(function($) {
    var canvasWrapper = $("#canvasWrapper");
    var page = $("#page");
    // var portfolio-box = $("art-background");
    var isMousemove = false;

    page.on("mousemove", function (event) {
        isMousemove = true;
    });

    page.mousestop(function() {
        canvasWrapper.addClass("no-color");
    });

    page.on("mousemove", function (event) {
        if (isMousemove) {
            canvasWrapper.removeClass("no-color");
        }
    });
});