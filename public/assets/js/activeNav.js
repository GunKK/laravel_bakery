$(document).ready(function() {
    $(".navbar-top__link").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });
});