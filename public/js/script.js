$(window).scroll(function() {
    let height = $(window).scrollTop();
    if (height > 100) {
        $('.backToTop').css('opacity', '1');
    } else {
        $('.backToTop').css('opacity', '0');
    }
});

$(document).ready(function() {
    $(".backToTop").click(function(e) {
        e.preventDefault();
        $("html, body").animate(
            { 
                scrollTop: 0 
            }, 300
        );
        return false;
    });

});