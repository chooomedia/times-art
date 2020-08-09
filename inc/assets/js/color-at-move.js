jQuery(function($) {
    let portfolioBox = $(".post-img");
    let headerThumb = $(".header-thumbnail");
    let blockImg = $(".wp-block-image img");
    let page = $("#page");

    let isMousemove = false;

    page.on("mousemove", function (event) {
        isMousemove = true;
    });

    page.mousestop(function() {
        if($("iframe").length > 0) {
            let iframe = $("iframe");
            iframe.addClass("no-color");
        }     
        portfolioBox.addClass("no-color");
        headerThumb.addClass("no-color");
        blockImg.addClass("no-color");
    });

    page.on("mousemove", function (event) {
        if (isMousemove) {
            if($("iframe").length > 0) {
                iframe = $("iframe");
                iframe.removeClass("no-color");
            } 
            portfolioBox.removeClass("no-color");
            headerThumb.removeClass("no-color");
            blockImg.removeClass("no-color");
        }
    });
});