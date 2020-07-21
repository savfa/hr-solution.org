$(function(){

    //Мобильное меню
    $(".bar__nav").click(function(e){
        $(this).toggleClass('is-active');
        $(".nav__list").slideToggle("slow");
    });
    if ($( window ).width() < 741) {
        $('.nav__list li').on('click', function(e){
        	$('.bar__nav').toggleClass('is-active');
    		$(".nav__list").slideToggle("slow");

        });
    }
    //Слайдер
	$('.slider2, .slider5, .reviews__slider').slick({
	  dots: true,
	  infinite: true,
	  speed: 500
	});

    $('.slider6').slick({
    	dots: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    $('.slider4').slick({
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

	//Читать дальше
    $('.btn__more').on('click', function(e){
        e.preventDefault();
        $(this).parent().siblings('.slider-text__more').slideToggle();
        if (!$(this).data('status')) {
            $(this).html('Скрыть');
            $(this).data('status', true);
        } else { $(this).html('Читать дальше');
            $(this).data('status', false); }
    });
    $('.blog__slider-btn__more').on('click', function(e){
        e.preventDefault();
        $(this).parent().siblings('.blog__slider-text__more').slideToggle();
        if (!$(this).data('status')) {
            $(this).html('Скрыть');
            $(this).data('status', true);
        } else { $(this).html('Читать дальше');
            $(this).data('status', false); }
    });

    //Прокрутка
    $('.footer__up').on('click', function(e){
    	e.preventDefault();
        $('html, body').animate({scrollTop:0}, 2000);
    });

    $("a.go").click(function () {
        elementClick = $(this).attr("href");
        elementClick = elementClick.slice(elementClick.indexOf("#"));
        destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 1500);
    });

    //Модальные окна
    $('.footer_police').on('click', function(){
       $('.police').arcticmodal();
    });
    $('.btn_tel').on('click', function(e){
    	e.preventDefault();
       $('.form-tel').arcticmodal();
    });
    $('.btn_meeting').on('click', function(e){
    	e.preventDefault();
       $('.form-tel').arcticmodal();
       $('.form-tel__text-p').text('Назначить встречу');  
    });
    $('.btn_consultation').on('click', function(e){
    	e.preventDefault();
       $('.form-consultation').arcticmodal();
    });

    //Проверка формы
    $('.btn__form').on('click', function(e) {
        e.preventDefault();
        $(this).parents('form').submit();
    })
    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
    );

    // Функция валидации и вывода сообщений
    function valEl(el) {

        el.validate({
            rules: {
                phone: {
                    required: true,
                    regex: '^([\+]+)*[0-9\x20\x28\x29\-]{5,20}$'
                },phone2: {
                    required: true,
                    regex: '^([\+]+)*[0-9\x20\x28\x29\-]{5,20}$'
                },
                name: {
                    required: true
                },
                name2: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: 'Поле обязательно для заполнения',
                    regex: 'Телефон может содержать символы + - ()'
                },
                name: {
                    required: 'Поле обязательно для заполнения',
                },
                email: {
                    required: 'Поле обязательно для заполнения',
                    email: 'Неверный формат E-mail'
                }
            },

            // Начинаем проверку id="" формы
            submitHandler: function(form) {
                // $('#loader').fadeIn();
                var $form = $(form);
                var $formId = $(form).attr('id');
                switch ($formId) {
                    // Если у формы id="popupResult" - делаем:
                    case 'form-tel':
                        $.ajax({
                            type: 'POST',
                            url: $form.attr('action'),
                            data: $form.serialize(),
                        })
                        .always(function(response) {
                        	setTimeout(function() {
                                $('.form__overlay').fadeIn();
                                $form.trigger('reset');
                                $('form input.valid').removeClass('valid');
                            }, 800);
                            setTimeout(function() {
                               $('#form-tel').arcticmodal('close');
                               $('.form__overlay').hide();
                            }, 3000);
                        });
                        break;
                    case 'form-consultation':
	                    $.ajax({
                            type: 'POST',
                            url: $form.attr('action'),
                            data: $form.serialize(),
                        })
                        .always(function(response) {
                            setTimeout(function() {
                                $('.form__overlay').fadeIn();
                                $form.trigger('reset');
                                $('form input.valid').removeClass('valid');
                            }, 800);
                            setTimeout(function() {
                               $('#form-consultation').arcticmodal('close');
                               $('.form__overlay').hide();
                            }, 3000); 
                        });
	                    break;
                }
                return false;
            }
        })
    }

    // Запускаем механизм валидации форм, если у них есть класс .js-form
    $('.js-form').each(function() {
        valEl($(this));
    });
    
});
    
