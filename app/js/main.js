$(document).ready(function () {
    $('.services-item').click(function () {
        console.log($(this).text());
        if (('.services-item__box').css('display') == 'none') {
            $(this).find('.services-item__box').slideDown("slow");
        }
        else {
            $(this).find('.services-item__box').slideUp("slow");
        }
    });
});
