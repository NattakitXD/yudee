$(document).ready(function() {
    $('.card-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});


$(function() {
    $('[data-toggle="popover"]').popover();
})

$(function() {
    $('.example-popover').popover({
        container: 'body'
    })
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
    $('.card-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});


$(function() {
    $('[data-toggle="popover"]').popover();
})

$(function() {
    $('.example-popover').popover({
        container: 'body'
    })
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