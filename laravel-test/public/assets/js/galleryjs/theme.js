$(document).ready(function(){
    $('.slick-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: false,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

$(document).ready(function() {
    // โค้ดทั้งหมดที่ต้องการให้ทำงานหลังจากโหลดเสร็จ
    $('.card-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('[data-toggle="popover"]').popover();
    });

    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
     });


    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#topButton').fadeIn();
            } else {
                $('#topButton').fadeOut();
            }
        });

        $("#topButton").on("click", function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    });


    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#topButton').fadeIn();
            } else {
                $('#topButton').fadeOut();
            }
        });

        $("#topButton").on("click", function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    });


/*Similar Homes You May Like*/
// var swiper = new Swiper(".swipers", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     slidesPerGroup: 1,
//     loop: false,
//     // centerSlide: "true",
//     // grapCurser: "true",
//     // fade: "true",
//     // loopFillGroupWithBlank: true,
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//       dynamicBullets: true,
//     },
//     navigation: {
//       nextEl: "._nexts",
//       prevEl: "._prevs",
//     },
//     breakpoints: {
//       0: {
//         slidesPerView: 1,
//       },
//       950: {
//         slidesPerView: 2,
//       },
//       1000: {
//         slidesPerView: 3,
//       }
//     }
//   });






