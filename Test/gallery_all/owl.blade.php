<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/theme.js') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-primary">

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                sadasdddsadasd
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                sadasdddsadasd
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                sadasdddsadasd
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                sadasdddsadasd
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                sadasdddsadasd
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                sadasdddsadasd
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                sadasdddsadasd
            </div>
        </div>
    </div>
</div>






    {{-- <div class="slick-slider calendar arrow-hide-disable mx-n1 slick-initialized"
                                                data-slick-options='{"slidesToShow": 5, "autoplay":false,"dots":false}'
                                                data-html="true">
                                                <div class="slick-prev slick-arrow slick-disabled"
                                                    aria-label="Previous" aria-disabled="true"
                                                    style="display: block;">
                                                    <i class="fa-solid fa-angle-left"></i>
                                                </div>


                                                <div class="slick-list draggable" style="height: 132.512px;">
                                                    <div class="slick-track" style="opacity: 1; width: 420px; transform: translate3d(0px, 0px, 0px);">
                                                        <div class="box px-1 py-4 slick-slide slick-current slick-active"
                                                            data-slick-index="0" aria-hidden="false"
                                                            style="width: 60px;" tabindex="0">
                                                            <div class="card pointer active border-0 shadow-xxs-1"
                                                                data-date="March 17, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Tue</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        17</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box px-1 py-4 slick-slide slick-active"
                                                            data-slick-index="1" aria-hidden="false"
                                                            style="width: 60px;" tabindex="0">
                                                            <div class="card pointer border-0 shadow-xxs-1"
                                                                data-date="March 18, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Wed</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        18</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box px-1 py-4 slick-slide slick-active"
                                                            data-slick-index="2" aria-hidden="false"
                                                            style="width: 60px;" tabindex="0">
                                                            <div class="card pointer border-0 shadow-xxs-1"
                                                                data-date="March 19, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Thur</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        19</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box px-1 py-4 slick-slide slick-active"
                                                            data-slick-index="3" aria-hidden="false"
                                                            style="width: 60px;" tabindex="0">
                                                            <div class="card pointer border-0 shadow-xxs-1"
                                                                data-date="March 20, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Fri</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        20</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box px-1 py-4 slick-slide slick-active"
                                                            data-slick-index="4" aria-hidden="false"
                                                            style="width: 60px;" tabindex="0">
                                                            <div class="card pointer border-0 shadow-xxs-1"
                                                                data-date="March 21, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Sat</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        21</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box px-1 py-4 slick-slide" data-slick-index="5"
                                                            aria-hidden="true" style="width: 60px;" tabindex="-1">
                                                            <div class="card pointer border-0 shadow-xxs-1"
                                                                data-date="March 22, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Sun</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        22</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box px-1 py-4 slick-slide" data-slick-index="6"
                                                            aria-hidden="true" style="width: 60px;" tabindex="-1">
                                                            <div class="card pointer border-0 shadow-xxs-1"
                                                                data-date="March 23, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Mon</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        23</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box px-1 py-4 slick-slide" data-slick-index="6"
                                                            aria-hidden="true" style="width: 60px;" tabindex="-1">
                                                            <div class="card pointer border-0 shadow-xxs-1"
                                                                data-date="March 23, 2020">
                                                                <div class="card-body p-1 text-center">
                                                                    <p class="day fs-12 text-muted lh-2 mb-0">
                                                                        Mon</p>
                                                                    <p
                                                                        class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                        23</p>
                                                                    <p class="month fs-13 letter-spacing-087 mb-0">
                                                                        Mar</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="slick-next slick-arrow" aria-label="Next" style=""
                                                    aria-disabled="false">
                                                    <i class="fa-solid fa-angle-right"></i></i>
                                                </div>
                                            </div> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        $('.slider').slick({
            dots: true,
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
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
</body>

</html>
