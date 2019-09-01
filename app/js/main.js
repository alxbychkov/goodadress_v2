$(document).ready(function () {
    $('.services-item__title').click(function () {
        $(this).next('.services-item__box').slideToggle("slow");
    });
    $('.burger').click(function () {
        $('.navigation-min').slideToggle("slow");
    });
    $(window).resize(function () {
        if ($('.navigation-min').css('display') != 'none') {
            $('.navigation-min').hide();
        }
    });
    $('.nav-item').click(function () {
        let idName = $(this).attr('data');
        if (idName) {
            let offset = $(idName).offset();
            $('html, body').animate({
                'scrollTop': offset.top - 32
            }, 1000);
        }
    });
    $(".owl-carousel").owlCarousel();
});
