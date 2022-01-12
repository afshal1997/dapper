$(".hambergur").on("click", () => {
    $(".fullscreen").toggleClass("active").removeClass("reverse_anim");
});

$(".close").on("click", () => {
    $(".fullscreen").toggleClass("reverse_anim");
});

$(".slick-slider").slick({
    slidesToShow: 1,
    infinite: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 2000,
    dots: false,
    Boolean,
    arrows: true,
    Boolean
});

$(".testimonialSlider").slick({
    slidesToShow: 1,
    infinite: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 2000,
    dots: false,
    Boolean,
    arrows: false,
    Boolean,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,

        }

    }, {
        breakpoint: 800,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
        }
    }]
});

var navbar = document.querySelector('.navbar')
window.onscroll = function () {
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
}

// $(document).ready(function () {

//     setTimeout(function () {
//         $('#ctn-preloader').addClass('loaded');
//         // Una vez haya terminado el preloader aparezca el scroll
//         $('body').removeClass('no-scroll-y');

//         if ($('#ctn-preloader').hasClass('loaded')) {
//             // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
//             $('#preloader').delay(1600).queue(function () {
//                 $(this).remove();
//             });
//         }
//     }, 3000);

// });

$('nav li a').filter(function () {
    return this.href === location.href;
}).addClass('active');


AOS.init();