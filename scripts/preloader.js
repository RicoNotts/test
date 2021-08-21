(function() {
    $("#preloader").delay(1500).fadeTo(1000, 1, function() {
        $("#preloader #headerLeft img").removeClass("preload");
        $("#preloadBar").css("opacity", "0");
    });
    $("#preloader").delay(1000).fadeTo(1000, 0, function () {
        $(this).css("display","none");
        $("html").removeClass("scrollFix");
    });
})();