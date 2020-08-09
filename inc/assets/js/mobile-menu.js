jQuery(function ($) {
    let hamburgerBtn = $(".hamburger");
    let hamburgerBtnInner = $(".hamburger-inner");
    let mainmenuUl = $("#menu-mainmenu");
    let mainNav = $("#main-nav");
    let mainmenuUlLinkEl = $("#menu-mainmenu li a");

    hamburgerBtn.on("click", function () {
        $(this).toggleClass("is-active", "");
        hamburgerBtnInner.toggleClass("is-active", "");
        $(".site-title").toggleClass("is-active", "");
        $("svg g").attr('fill', function (index, attr) {
            return attr == "#363f59" ? "#fff" : "#363f59";
        });
        $("#menu-mainmenu").toggleClass("is-active", "");
        mainNav.css('display', function (index, attr) {
            return attr == "flex" ? "none" : "flex";
        });
    })

    mainmenuUlLinkEl.on("click", function () {
        hamburgerBtn.removeClass("is-active");
        hamburgerBtnInner.removeClass("is-active");
        $(".site-title").removeClass("is-active");
        $("svg g").attr("fill", "#363f59");
        $("#menu-mainmenu").toggleClass("is-active");
        mainNav.css("display", "none");
    });
});