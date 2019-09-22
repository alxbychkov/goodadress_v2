$(document).ready(function () {
    $('.services-item__title').click(function () {
        $(this).next('.services-item__box').slideToggle("slow");
    });
    $('.burger').click(function () {
        $('.navigation-min').slideToggle("slow");
    });
    $(".navigation-min").on("mouseleave", function () {
        $(this).slideToggle("slow");
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
    $('.form-callback').submit(function (e) {
        e.preventDefault();
        let name = $('.form-callback').find('input[name="name"]');
        let phone = $('.form-callback').find('input[name="phone"]');
        if ((name.val() != "") && (phone.val() != "") && (name.val().length > 2) && (phone.val().length > 6)) {

            name.css('border', '');
            phone.css('border', '');
            $.ajax({
                url: "/app/php/mail.php",
                type: "post",
                data: $(this).serialize(),
                success: function () {
                    alert("Ваша заявка принята!");
                },
            });
        } else {
            if ((name.val() == "") || (name.val().length < 3)) {
                name.css('border', '1px solid red');
            } else {
                name.css('border', '');
            }
            if ((phone.val() == "") || (phone.val().length < 7)) {
                phone.css('border', '1px solid red');
            } else {
                phone.css('border', '');
            }
            return false;
        }
        name.val('');
        phone.val('');
    });
    $('.form-callback').find('input').keyup(function () {
        if ($(this).val() == "") {
            $(this).css('border', '1px solid red');
        } else {
            $(this).css('border', '');
        }
    });

    $('.adres_show').click(function () {
        $.ajax({
            url: "/app/php/adreses_section.php",
            type: "post",
            data: $(this).serialize(),
            success: function () {
                alert("Ваша заявка принята!");
            },
        });
    });

});
