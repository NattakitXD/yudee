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



    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })




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
