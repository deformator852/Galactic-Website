$(document).ready(function () {
    $("#scroll-to-top").click(function () {
        $("html,body").animate({scrollTop: 0}, 600)
    })
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $("#scroll-to-top").fadeIn(800);
        } else {
            $("#scroll-to-top").fadeOut();
        }
    });
})