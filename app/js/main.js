$(document).ready(function () {
    $('.services-item__title').click(function () {
        $(this).next('.services-item__box').slideToggle("slow");
    });
    $('.burger').click(function () {
        if ($(this).hasClass('burger_close')) {
            $(this).removeClass('burger_close');
        } else {
            $(this).addClass('burger_close');
        }
        $('.navigation-min').slideToggle("slow");
    });
    $(".navigation-min").on("mouseleave", function () {
        $(this).slideToggle("slow");
        if ($('.burger').hasClass('burger_close')) {
            $('.burger').removeClass('burger_close');
        } else {
            $('.burger').addClass('burger_close');
        }
    });
    $(window).resize(function () {
        if ($('.navigation-min').css('display') != 'none') {
            $('.navigation-min').hide();
            $('.burger').removeClass('burger_close');
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

    $('[data-open=adres_show]').click(function () {
        $('#img').empty();
        // $('#img').removeClass('owl-carousel2');
        $('.modal-adress').fadeIn(300);
        let id = $(this).data('id');
        $.ajax({
            url: "/app/php/adres_show.php",
            method: 'post',
            dataType: 'json',
            data: { id: id },
            success: function (data) {
                let full_adres = `${data[0].address} <span class="pink"> ${data[0].type} - ${data[0].square} </span>`;
                $('#ifns').text(data[0].ifns);
                $('#district').text(data[0].district);
                $('#full-adres').html(full_adres);
                $('#description').text(data[0].description);
                for (let i = 0; i < data[0].picture.length; i++) {
                    let path = '/app/adres_img/' + data[0].folder + '/' + data[0].picture[i];
                    $('#img').append(`<div class="image_wrap"><img src="${path}" class="image_img" alt="" data-lazy="${path}"></div>`);
                }
                // $('#img').slick({
                //     infinite: true,
                //     slidesToShow: 1,
                //     slidesToScroll: 1,
                //     autoplay: false,
                //     autoplaySpeed: 5000,
                //     arrows: true,
                //     prevArrow: '<button type="button" class="slick-prev"></button>',
                //     nextArrow: '<button type="button" class="slick-next"></button>',
                //     lazyLoad: 'progressive'
                // });
                $('#price').text(data[0].price);
                $('#img').slick('setPosition');
                $('#img').slick('init');
            },
        });
    });
    $('#img').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        lazyLoad: 'progressive'
    });
    $('.close-btn').click(function () {
        $('.modal-adress').fadeOut(300);
        $('#img').slick('unslick');
    });
    $('.modal-adress').click(function () {
        $(this).fadeOut(300);
        $('#img').slick('unslick');
    });
    $('.adress-card').click(function (e) {
        e.stopPropagation();
    });
    $(document).keyup(function (e) {
        if ($('.modal-adress').css('display') != 'none') {
            if (e.keyCode === 27) {
                $('.modal-adress').fadeOut(300);
                $('#img').slick('unslick');
            }
        }
    });

});
