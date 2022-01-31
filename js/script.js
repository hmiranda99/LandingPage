$(window).scroll(function () {
    if ($(window).scrollTop()) {
        $("#header").css("display", "none");
        $("#topMenu").css("display", "block");
    } else {
        $("#header").css("display", "block");
        $("#topMenu").css("display", "none");
    }
});