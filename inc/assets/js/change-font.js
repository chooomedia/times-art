jQuery(function($) {
    $.fn.exists = function(){ return this.length > 0; }

    if ($("#subheader > div > div > div > h1").exists()) {
        var slogan = $("#subheader > div > div > div > h1");
        slogan.html(slogan.html().substring(0,11)+'<span>'+slogan.html().substring(11)+'</span>');
    }
});