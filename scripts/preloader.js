(function() {
    $("#preloader").delay(4000).fadeTo(1000, 0, function () {
        $(this).css("display","none");
        $("html").removeClass("scrollFix");
    });
})();