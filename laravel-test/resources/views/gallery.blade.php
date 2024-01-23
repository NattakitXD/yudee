<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="module" crossorigin="" src="css/gallerycss/theme.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/gallerycss/theme.css') }}" type="text/css" />

    <script src="https://kit.fontawesome.com/8365c6ef59.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <title>Bootstrap Example</title>



</head>

<body>


    <main>
        <section>
            <div class="container-fluid">
                <div class="position-relative zoomIn ">

                    <div class="position-absolute pos-fixed-top-right z-index-3">
                        <ul class="list-inline pt-4 pr-5">

                            <li class="list-inline-item mr-2">
                                <a href="#" data-toggle="tooltip" title=""
                                    class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                    data-original-title="Favourite">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </li>

                            <li class="list-inline-item mr-2">
                                <button
                                    class="btn btn-white p-0 d-flex align-items-center justify-content-center w-40px h-40 text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none"
                                    type="button" data-placement="top" data-toggle="popover" data-container="body"
                                    data-content='
                                        <ul class="list-inline mb-0 fs-22">
                                            <li class="list-inline-item">
                                                <i class="fab fa-twitter"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fab fa-facebook"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa-brands fa-instagram"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa-brands fa-youtube"></i>
                                            </li>
                                        </ul>'
                                    data-html="true" data-original-title="" title="">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </button>
                            </li>


                            <li class="list-inline-item">
                                <a href="#" data-toggle="tooltip" title=""
                                    class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                    data-original-title="Print">
                                    <i class="fa-solid fa-print"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row galleries m-n1 py-2">
                    <div class="col-lg-6 p-1 ">
                        <div class="item item-size-4-3">
                            <div class="card p-0 hover-zoom-in">
                                <img href="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-1.jpg') }}"
                                    class="card-img" data-gtf-mfp="true" data-gtf-mfp="true" data-gallery-id="01"
                                    src="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-1.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-1 ">
                        <div class="row m-n1">
                            <div class="col-md-6 p-1 ">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <img href="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-2.jpg') }}"
                                            class="card-img" data-gtf-mfp="true" data-gtf-mfp="true"
                                            data-gallery-id="01"
                                            src="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-2.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <img href="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-3.jpg') }}"
                                            class="card-img" data-gtf-mfp="true" data-gtf-mfp="true"
                                            data-gallery-id="01"
                                            src="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-3.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <img href="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-4.jpg') }}"
                                            class="card-img" data-gtf-mfp="true" data-gtf-mfp="true"
                                            data-gallery-id="01"
                                            src="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-4.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <img href="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-5.jpg') }}"
                                            class="card-img" data-gtf-mfp="true" data-gtf-mfp="true"
                                            data-gallery-id="01"
                                            src="{{ URL('https://templates.g5plus.net/homeid/images/single-property-lg-5.jpg') }}">

                                        <div class=" hidden">
                                            <img href="{{ URL('https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg') }}"
                                                data-gallery-id="01" class="card-img" data-gtf-mfp="true"
                                                data-gtf-mfp="true">
                                            <img href="{{ URL('https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg') }}"
                                                data-gallery-id="01" class="card-img" data-gtf-mfp="true"
                                                data-gtf-mfp="true">
                                            <img href="{{ URL('https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg') }}"
                                                data-gallery-id="01" class="card-img" data-gtf-mfp="true"
                                                data-gtf-mfp="true">
                                            <img href="{{ URL('https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-image-vector-illustration-isolated-png-image_1694547.jpg') }}"
                                                data-gallery-id="01" class="card-img" data-gtf-mfp="true"
                                                data-gtf-mfp="true">
                                        </div>

                                        <a href="#"
                                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center hover-image bg-dark-opacity-04">
                                            <p class="fs-48 font-weight-600 text-white lh-1 mb-4">+12</p>
                                            <p class="fs-16 font-weight-bold text-white lh-1625 text-uppercase">
                                                View more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="container">
            <div class="row">
                <article class="col-lg-8 pr-xl-7">
                    <section class="pb-7 border-bottom">
                        <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
                            <li class="list-inline-item badge badge-orange mr-2">Featured</li>
                            <li class="list-inline-item badge badge-primary mr-3">For Sale</li>
                            <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i
                                    class="fa-regular fa-clock mr-1"></i>2months ago
                            </li>
                            <li class="list-inline-item mt-2 mt-sm-0"><i class="fa-regular fa-eye mr-1"></i>1039views
                            </li>
                        </ul>

                        <div class="d-sm-flex justify-content-sm-between ">
                            <div c>
                                <h2 class="fs-30 text-heading font-bold mb-0">Villa on Hollywood Boulevard</h2>
                                <p class="mb-0"><i class="fa-solid fa-location-dot mr-2"></i>ที่อยู่บ้าน</p>
                            </div>

                            <div class="mt-2 text-lg-right">
                                <p class="fs-22 text-heading font-bold mb-0">$1.250.000</p>
                                <p class="mb-0">$0000/SqFt</p>
                            </div>
                        </div>
                        <h2 class="fs-22 text-heading font-bold mb-0">Description</h2>
                        <p class="mb-0 lh-md pt-2 ">Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus
                            faucibus
                            scelerisque eleifend donec.
                            Porta nibh venenatis cras sed felis eget velit aliquet. Neque volutpat ac tincidunt vitae
                            semper
                            quis lectus. Turpis in eu mi bibendum neque
                            egestas congue quisque. Sed elementum tempus egestas sed sed risus pretium quam. Dignissim
                            sodales
                            ut eu sem. Nibh mauris cursus mattis molestie a
                            iaculis at erat pellentesque. Id interdum velit laoreet id donec ultrices tincidunt.
                        </p>
                    </section>

                    <section class="pt-6 border-bottom">

                        <h2 class="fs-30 text-heading font-bold mb-0">Facts and Features</h2>
                        <div class="row pt-3">
                            <div class="col-lg-3 col-6 mb-6 ">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <i class="fa-solid fa-house-chimney-window fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            Type
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            Single Family
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <i class="fa-solid fa-trowel-bricks fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            YEAR
                                            BUILT
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            2020
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <i class="fa-solid fa-temperature-arrow-up fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            HEATING
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            Radiant
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <i class="fa-solid fa-house-flag fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            SQFT
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            979.0
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <i class="fa-solid fa-bed fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            BEDROOMS
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            3
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-bath fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            BATHROOMS
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            2
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <i class="fa-solid fa-warehouse fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            GARAGE
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            1
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <i class="fa-solid fa-scroll fs-32 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class=" my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal ">
                                            STATUS
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">
                                            Active
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="pt-6 border-bottom ">
                        <h2 class="fs-30 text-heading font-bold mb-0">Additional Details</h2>
                        <div class="row pt-2">
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Property ID</dt>
                                <dd>AD-29100</dd>
                            </dl>

                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Price</dt>
                                <dd>$890.000</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Property type</dt>
                                <dd>Apartment, bar, cafe, villa</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Property status</dt>
                                <dd>For Sale</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Rooms</dt>
                                <dd>4</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Bedrooms</dt>
                                <dd>3</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Size</dt>
                                <dd>900SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Bathrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Garage</dt>
                                <dd>1</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Bathrooms</dt>
                                <dd>2000 SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Garage size</dt>
                                <dd>50 SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Year build</dt>
                                <dd>2020</dd>
                            </dl>
                            <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Label</dt>
                                <dd>Bestseller</dd>
                            </dl>


                        </div>
                    </section>

                    <section class="pt-6 border-bottom">
                        <h2 class="fs-30 text-heading font-bold mb-0">Offices Amenities</h2>
                        <ul class="list-unstyled mb-0 row pt-2 ">
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-primary"></i>Balcony
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-check mr-2 text-primary"></i>Fireplace
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-primary"></i>Balcony
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-check mr-2 text-primary"></i>Fireplace
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-check mr-2 text-primary"></i>Basement
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-primary"></i>Cooling
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-check mr-2 text-primary"></i>Basement
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-primary"></i>Cooling
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-primary"></i>Dining
                                room
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-check mr-2 text-primary"></i>Dishwasher
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-primary"></i>Dining
                                room
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-check mr-2 text-primary"></i>Dishwasher
                            </li>
                        </ul>

                    </section>

                    <section class="pt-6 border-bottom">

                        <h4 class="fs-30 text-heading font-bold mb-3">Virtual Tour</h4>
                        <iframe height="430" src="https://my.matterport.com/show/?m=wWcGxjuUuSb" allowfullscreen=""
                            class="w-100"></iframe>


                    </section>

                    <section class="pt-6 border-bottom pb-5">
                        <h2 class="fs-30 text-heading font-bold mb-3">Location</h2>
                        <div class="d-flex justify-content-center ">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61986.891901766154!2d100.4506952486328!3d13.828182899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1704791449392!5m2!1sth!2sth"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </section>

                    <section>
                        <h4 class="fs-30 text-heading lh-15 mb-5 pt-3">Rating &amp; Reviews</h4>
                        <div class="card border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="row">

                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <div class="bg-gray-01 rounded-lg pt-2 px-6 pb-6">
                                            <h5 class="fs-16 lh-2 text-heading mb-6">
                                                Avarage User Rating
                                            </h5>
                                            <p class="fs-40 text-heading font-weight-bold mb-6 lh-1">4.6 <span
                                                    class="fs-18 text-gray-light font-weight-normal">/5</span></p>
                                            <ul class="list-inline">
                                                <li
                                                    class="list-inline-item bg-warning text-white text-white w-46px h-46 d-inline-flex align-items-center justify-content-center rounded-lg  fs-18 mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-gray-04 text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 pt-3">
                                        <h5 class="fs-16 lh-2 text-heading mb-5">
                                            Rating Breakdown
                                        </h5>
                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress rating-progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">60%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress rating-progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">40%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress rating-progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">0%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress rating-progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">0%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress rating-progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">0%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>


                    <section class="pt-6 border-bottom">
                        <div class="card border-0 mb-4">
                            <div class="card-body p-0">
                                <h3
                                    class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary">
                                    5
                                    Reviews</h3>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ URL('https://templates.g5plus.net/homeid/images/review-07.jpg') }}"
                                        alt="Danny Fox" class="rounded-circle mr-sm-8 mb-4 mb-sm-0 fs-14 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                    <div class="media-body">
                                        <div class="row mb-1 align-item-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <ul
                                                    class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                    <li class="list-inline-item mr-0">
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="mb-3 ">Very good and fast support during the week. Thanks for
                                                always keeping your WordPress themes up to date. Your level of support
                                                and
                                                dedication
                                                is second to none.
                                            </p>
                                            <div class="d-flex justify-content-center justify-content-sm-start">
                                                <p class="mb-0 text-muted fs-13 lh-1 "> 02 Dec 2020 at 2:40 </p>
                                                <a href="#"
                                                    class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ URL('https://templates.g5plus.net/homeid/images/review-08.jpg') }}"
                                        alt="Viola Austin" class="rounded-circle mr-sm-8 mb-4 mb-sm-0 fs-14 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                    <div class="media-body">
                                        <div class="row mb-1 align-item-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h4 class="mb-0 text-heading fs-14">Viola Austin</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <ul
                                                    class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                    <li class="list-inline-item mr-0">
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="mb-3 ">Very good and fast support during the week. Thanks for
                                                always keeping your WordPress themes up to date. Your level of support
                                                and
                                                dedication
                                                is second to none.
                                            </p>
                                            <div class="d-flex justify-content-center justify-content-sm-start">
                                                <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                <a href="#"
                                                    class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ URL('https://templates.g5plus.net/homeid/images/review-09.jpg') }}"
                                        alt="Nettie Singleton"
                                        class="rounded-circle mr-sm-8 mb-4 mb-sm-0 fs-14 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                    <div class="media-body">
                                        <div class="row mb-1 align-item-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h4 class="mb-0 text-heading fs-14">Nettie Singleton</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <ul
                                                    class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                    <li class="list-inline-item mr-0">
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="mb-3 ">Very good and fast support during the week. Thanks for
                                                always keeping your WordPress themes up to date. Your level of support
                                                and
                                                dedication
                                                is second to none.
                                            </p>
                                            <div class="d-flex justify-content-center justify-content-sm-start">
                                                <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                <a href="#"
                                                    class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ URL('https://templates.g5plus.net/homeid/images/review-07.jpg') }}"
                                        alt="Vernon Fisher"
                                        class="rounded-circle mr-sm-8 mb-4 mb-sm-0 fs-14 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                    <div class="media-body">
                                        <div class="row mb-1 align-item-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h4 class="mb-0 text-heading fs-14">Vernon Fisher</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <ul
                                                    class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                    <li class="list-inline-item mr-0">
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-border">
                                                            <i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="mb-3 ">Very good and fast support during the week. Thanks for
                                                always keeping your WordPress themes up to date. Your level of support
                                                and
                                                dedication
                                                is second to none.
                                            </p>
                                            <div class="d-flex justify-content-center justify-content-sm-start">
                                                <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                <a href="#"
                                                    class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ URL('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW2i5SncdIRQskLGrrby3HxDzdvQ35H6S6wpQZ_X4mKkEUF8_r') }}"
                                        alt="Harry Iglesias"
                                        class=" rounded-circle mr-sm-8 mb-4 mb-sm-0 fs-14 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                    <div class="media-body">
                                        <div class="row mb-1 align-item-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h4 class="mb-0 text-heading fs-14">Harry Iglesias</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <ul
                                                    class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                    <li class="list-inline-item mr-0">
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-border">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <p class="mb-3 ">Very good and fast support during the week. Thanks for
                                                always keeping your WordPress themes up to date. Your level of support
                                                and
                                                dedication
                                                is second to none.
                                            </p>
                                            <div class="d-flex justify-content-center justify-content-sm-start">
                                                <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                <a href="#"
                                                    class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="pt-6 border-bottom">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <h3 class="fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                                <form>
                                    <div class="form-group mb-4 d-flex justify-content-start">
                                        <div class="rate-input">
                                            <input type="radio" id="star5" name="rate" value="5">
                                            <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star4" name="rate" value="4">
                                            <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star3" name="rate" value="3">
                                            <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star2" name="rate" value="2">
                                            <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star1" name="rate" value="1">
                                            <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-4">
                                                <input placeholder="Your Name"
                                                    class="form-control form-control-lg border-0" type="text"
                                                    name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-4">
                                                <input type="email" placeholder="Email" name="email"
                                                    class="form-control form-control-lg border-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-6">
                                        <textarea class="form-control form-control-lg border-0" placeholder="Your Review" name="message" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary px-10 mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>

                </article>


                <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky ">
                    <div class="make-me-sticky " style="">
                        <div class="card border-0 widget-request-tour">
                            <ul class="list-inline nav nav-tabs d-flex " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active px-3 " data-toggle="tab" href="#schedule"
                                        role="tab" aria-selected="true">Schedule A Tour
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-3" data-toggle="tab" href="#request-info" role="tab"
                                        aria-selected="false">Request Info
                                    </a>
                                </li>
                            </ul>
                            <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0">
                                <form>
                                    <div class="tab-content pt-1 pb-0 px-0 shadow-none">
                                        {{-- Schedule A Tour ID --}}
                                        <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                                            <div class="slick-slider  ">

                                                <div class="box px-1 py-4  " data-slick-index="0"
                                                    aria-hidden="false" style="width: 60px;" tabindex="0">
                                                    <div class="card pointer  border-0 shadow-xxs-1 "
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

                                                <div class="box px-1 py-4 slick-slide " data-slick-index="0"
                                                    aria-hidden="false" style="width: 60px;" tabindex="0">
                                                    <div class="card pointer border-0 shadow-xxs-1"
                                                        data-date="March 17, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">
                                                                Tue</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                18</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">
                                                                Mar</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box px-1 py-4 slick-slide " data-slick-index="0"
                                                    aria-hidden="false" style="width: 60px;" tabindex="0">
                                                    <div class="card pointer  border-0 shadow-xxs-1"
                                                        data-date="March 17, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">
                                                                Tue</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                19</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">
                                                                Mar</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box px-1 py-4 slick-slide " data-slick-index="0"
                                                    aria-hidden="false" style="width: 60px;" tabindex="0">
                                                    <div class="card pointer  border-0 shadow-xxs-1"
                                                        data-date="March 17, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">
                                                                Tue</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                20</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">
                                                                Mar</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box px-1 py-4 slick-slide " data-slick-index="0"
                                                    aria-hidden="false" style="width: 60px;" tabindex="0">
                                                    <div class="card pointer  border-0 shadow-xxs-1"
                                                        data-date="March 17, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">
                                                                Tue</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                21</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">
                                                                Mar</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box px-1 py-4 slick-slide " data-slick-index="0"
                                                    aria-hidden="false" style="width: 60px;" tabindex="0">
                                                    <div class="card pointer  border-0 shadow-xxs-1"
                                                        data-date="March 17, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">
                                                                Tue</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                22</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">
                                                                Mar</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box px-1 py-4 slick-slide" data-slick-index="0"
                                                    aria-hidden="false" style="width: 60px;" tabindex="0">
                                                    <div class="card pointer  border-0 shadow-xxs-1"
                                                        data-date="March 17, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">
                                                                Tue</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                23</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">
                                                                Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" class="date" name="date"
                                                value="March 17, 2020">
                                            <div class="form-group mb-2">


                                                <div class="form-group mb-2">
                                                    <div
                                                        class="input-group input-group-lg bootstrap-timepicker timepicker">
                                                        <input type="text"
                                                            class="form-control border-0 text-body shadow-none"
                                                            placeholder="Choose a time">
                                                        <div class="input-group-append input-group-addon">
                                                            <button class="btn bg-input shadow-none fs-18 lh-1"
                                                                type="button">
                                                                <i class="fa-solid fa-angle-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    placeholder="First Name, Last Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" class="form-control form-control-lg border-0"
                                                    placeholder="Your Email">
                                            </div>
                                            <div class="form-group mb-4">
                                                <input type="tel" class="form-control form-control-lg border-0"
                                                    placeholder="Your phone">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary btn-lg btn-block rounded">Schedule A Tour
                                            </button>
                                            <div class="form-group form-check mt-2 mb-0">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label fs-13" for="exampleCheck1">Egestas
                                                    fringilla
                                                    phasellus
                                                    faucibus
                                                    scelerisque
                                                    eleifend donec.</label>
                                            </div>
                                        </div>
                                        {{-- Request Info ID --}}
                                        <div class="tab-pane fade pt-5" id="request-info" role="tabpanel">
                                            <div class="form-check d-flex align-items-center border-bottom pb-3 mb-3">
                                                <input class="form-check-input" type="radio" name="agent"
                                                    value="option1">
                                                <div class="form-check-label ml-2">
                                                    <div class="d-flex align-items-center">
                                                        <a href="agent-details-1.html"
                                                            class="d-block w-60px h-60 mr-3">
                                                            <img src="https://templates.g5plus.net/homeid/images/agent-2.jpg"
                                                                class="rounded-circle" alt="agent-2">
                                                        </a>
                                                        <div>
                                                            <a href="agent-details-1.html"
                                                                class="d-block text-dark font-weight-500 lh-15 hover-primary">Oliver
                                                                Beddows</a>
                                                            <p class="mb-0 fs-13 mb-0 lh-17">Sales Excutive</p>
                                                            <p class="mb-0 fs-13 mb-0 lh-17">
                                                                <span>(+123)</span><span
                                                                    class="text-heading d-inline-block ml-2">1900
                                                                    68668</span>
                                                            </p>

                                                            <ul class="list-inline mb-0 fs-22 pl-2">

                                                                <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                    <a href="https://line.me/R/ti/p/@Luvdrive?from=page"
                                                                        target="_blank">
                                                                        <i class="fa-brands fa-line text-yudee"></i>
                                                                    </a>
                                                                </li>


                                                                <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                    <a href="tel:091-545-3939" target="_blank">
                                                                        <i class="fa-solid fa-phone text-yudee"></i>
                                                                    </a>
                                                                </li>
                                                                </a>
                                                            </ul>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check d-flex align-items-center mb-6">
                                                <input class="form-check-input" type="radio" name="agent"
                                                    id="inlineRadio2" value="option2">
                                                <div class="form-check-label ml-2">
                                                    <div class="d-flex align-items-center">
                                                        <a href="agent-details-1.html"
                                                            class="d-block w-60px h-60 mr-3">
                                                            <img src="https://templates.g5plus.net/homeid/images/agent-1.jpg"
                                                                class="rounded-circle" alt="agent-1">
                                                        </a>
                                                        <div>
                                                            <a href="agent-details-1.html"
                                                                class="d-block text-dark font-weight-500 lh-15 hover-primary">Max
                                                                Kordex</a>
                                                            <p class="mb-0 fs-13 mb-0 lh-17">Real estate
                                                                broker</p>
                                                            <p class="mb-0 fs-13 mb-0 lh-17">
                                                                <span>(+123)</span><span
                                                                    class="text-heading d-inline-block ml-2">1900
                                                                    68668</span>
                                                            </p>

                                                            <ul class="list-inline mb-0 fs-22 pl-2">

                                                                <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                    <a href="https://line.me/R/ti/p/@Luvdrive?from=page"
                                                                        target="_blank">
                                                                        <i class="fa-brands fa-line text-yudee"></i>
                                                                    </a>
                                                                </li>


                                                                <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                    <a href="tel:091-545-3939" target="_blank">
                                                                        <i class="fa-solid fa-phone text-yudee"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    placeholder="First Name, Last Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" class="form-control form-control-lg border-0"
                                                    placeholder="Your Email">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="tel" class="form-control form-control-lg border-0"
                                                    placeholder="Your phone">
                                            </div>
                                            <div class="form-group mb-4">
                                                <textarea class="form-control border-0" rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary btn-lg btn-block rounded">Request
                                                Info
                                            </button>
                                            <div class="form-group form-check mt-2 mb-0">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label fs-13" for="exampleCheck2">Egestas
                                                    fringilla
                                                    phasellus
                                                    faucibus
                                                    scelerisque
                                                    eleifend donec.</label>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>


            </div>
        </div>

        <section class="pt-6 pb-8" >
            <div class="container " >
                <h4 class="fs-22 text-heading mb-6">Similar Homes You May Like</h4>
                    <div class="slick-list draggable" style="height: 500px;">
                        <div class="slick-track" style="opacity: 1; width: 100%; transform: translate3d(0px, 0px, 0px);">
                            <div class="col-md-12 ">
                                <div class="slick-slider " >
                                    <div class="  slick-slide-box slick-current slick-active d-flex justify-content-between " style="width: 400px;"
                                        tabindex="0" data-slick-index="0" aria-hidden="false">
                                        <div class="card shadow-hover-2 mr-2 ">
                                            <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                                <img src="https://templates.g5plus.net/homeid/images/properties-grid-38.jpg" alt="Home in Metric Way">
                                                <div class="card-img-overlay p-2 d-flex flex-column">
                                                    <div>
                                                        <span class="badge mr-2 badge-primary">for Sale</span>
                                                    </div>
                                                    <ul class="list-inline mb-0 mt-auto hover-image">
                                                        <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                            title="" data-original-title="9 Images">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-images"></i><span class="pl-1">9</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-toggle="tooltip" title=""
                                                            data-original-title="2 Video">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-play-circle"></i><span
                                                                    class="pl-1">2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3">
                                                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                        class="text-dark hover-primary" tabindex="0">Home in Metric Way</a>
                                                </h2>
                                                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                    Los Angeles</p>
                                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""  data-original-title="3 Bedroom">
                                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-bedroom"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-bed text-primary mr-2"></i>3 Br
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-shower"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-shower text-primary mr-2"></i> 3 Ba
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-square"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center text-primary"></i> 2300 Sq.Ft
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="1 Garage">
                                                        <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-Garage"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-warehouse text-primary mr-2"></i> 1 Gr
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Wishlist"><i class="fas fa-heart"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Compare"><i
                                                                class="fas fa-exchange-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" slick-slide-box slick-active d-flex justify-content-between" style="width: 400px;" tabindex="0"
                                        data-slick-index="1" aria-hidden="false">
                                        <div class="card shadow-hover-2 mr-2">
                                            <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                                <img src="https://templates.g5plus.net/homeid/images/properties-grid-01.jpg" alt="Garden Gingerbread House">
                                                <div class="card-img-overlay p-2 d-flex flex-column">
                                                    <div>
                                                        <span class="badge mr-2 badge-orange">featured</span>
                                                        <span class="badge mr-2 badge-indigo">for Sale</span>
                                                    </div>
                                                    <ul class="list-inline mb-0 mt-auto hover-image">
                                                        <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                            title="" data-original-title="9 Images">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-images"></i><span class="pl-1">9</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-toggle="tooltip" title=""
                                                            data-original-title="2 Video">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-play-circle"></i><span
                                                                    class="pl-1">2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3">
                                                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                        class="text-dark hover-primary" tabindex="0">Garden Gingerbread
                                                        House</a></h2>
                                                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                    Los Angeles</p>
                                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="3 Bedroom">
                                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-bedroom"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-bed text-primary mr-2"></i> 3 Br
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-shower"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-shower text-primary mr-2"></i> 3 Ba
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-square"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center text-primary"></i> 2300 Sq.Ft
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="1 Garage">
                                                        <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-Garage"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-warehouse text-primary mr-2"></i> 1 Gr
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                                <p class="fs-17 font-weight-bold text-heading mb-0">$550<span
                                                        class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Wishlist"><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Compare"><i
                                                                class="fas fa-exchange-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" slick-slide-box slick-active d-flex justify-content-between" style="width: 400px;" tabindex="0"
                                        data-slick-index="2" aria-hidden="false">
                                        <div class="card shadow-hover-2 mr-2">
                                            <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                                <img src="https://templates.g5plus.net/homeid/images/properties-grid-02.jpg" alt="Affordable Urban House">
                                                <div class="card-img-overlay p-2 d-flex flex-column">
                                                    <div>
                                                        <span class="badge mr-2 badge-primary">for Sale</span>
                                                    </div>
                                                    <ul class="list-inline mb-0 mt-auto hover-image">
                                                        <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                            title="" data-original-title="9 Images">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-images"></i><span class="pl-1">9</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-toggle="tooltip" title=""
                                                            data-original-title="2 Video">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-play-circle"></i><span
                                                                    class="pl-1">2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3">
                                                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                        class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                        House</a></h2>
                                                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                    Los Angeles</p>
                                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-bedroom"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-bed text-primary mr-2"></i>3 Br
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-shower"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-shower text-primary mr-2"></i> 3 Ba
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-square"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center text-primary"></i> 2300 Sq.Ft
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="1 Garage">
                                                        <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-Garage"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-warehouse text-primary mr-2"></i> 1 Gr
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Wishlist"><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Compare"><i
                                                                class="fas fa-exchange-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" slick-slide-box slick-active d-flex justify-content-between" style="width: 400px;" tabindex="0"
                                        data-slick-index="3" aria-hidden="false">
                                        <div class="card shadow-hover-2 mr-2">
                                            <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                                <img src="https://templates.g5plus.net/homeid/images/properties-grid-07.jpg" alt="Affordable Urban House">
                                                <div class="card-img-overlay p-2 d-flex flex-column">
                                                    <div>
                                                        <span class="badge mr-2 badge-primary">for Sale</span>
                                                    </div>
                                                    <ul class="list-inline mb-0 mt-auto hover-image">
                                                        <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                            title="" data-original-title="9 Images">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-images"></i><span class="pl-1">9</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-toggle="tooltip" title=""
                                                            data-original-title="2 Video">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-play-circle"></i><span
                                                                    class="pl-1">2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3">
                                                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                        class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                        House</a></h2>
                                                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                    Los Angeles</p>
                                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-bedroom"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-bed text-primary mr-2"></i>3 Br
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-shower"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-shower text-primary mr-2"></i> 3 Ba
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-square"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center text-primary"></i> 2300 Sq.Ft
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="1 Garage">
                                                        <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-Garage"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-warehouse text-primary mr-2"></i> 1 Gr
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Wishlist"><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Compare"><i
                                                                class="fas fa-exchange-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" slick-slide-box slick-active d-flex justify-content-between" style="width: 400px;" tabindex="0"
                                        data-slick-index="4" aria-hidden="false">
                                        <div class="card shadow-hover-2 mr-2">
                                            <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                                <img src="https://templates.g5plus.net/homeid/images/properties-grid-05.jpg" alt="Affordable Urban House">
                                                <div class="card-img-overlay p-2 d-flex flex-column">
                                                    <div>
                                                        <span class="badge mr-2 badge-primary">for Sale</span>
                                                    </div>
                                                    <ul class="list-inline mb-0 mt-auto hover-image">
                                                        <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                            title="" data-original-title="9 Images">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-images"></i><span class="pl-1">9</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-toggle="tooltip" title=""
                                                            data-original-title="2 Video">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-play-circle"></i><span
                                                                    class="pl-1">2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3">
                                                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                        class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                        House</a></h2>
                                                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                    Los Angeles</p>
                                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-bedroom"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-bed text-primary mr-2"></i>3 Br
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-shower"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-shower text-primary mr-2"></i> 3 Ba
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-square"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center text-primary"></i> 2300 Sq.Ft
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="1 Garage">
                                                        <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-Garage"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-warehouse text-primary mr-2"></i> 1 Gr
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Wishlist"><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Compare"><i
                                                                class="fas fa-exchange-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" slick-slide-box slick-active d-flex justify-content-between" style="width: 400px;" tabindex="0"
                                        data-slick-index="5" aria-hidden="false">
                                        <div class="card shadow-hover-2 mr-2">
                                            <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                                <img src="https://templates.g5plus.net/homeid/images/properties-grid-06.jpg" alt="Affordable Urban House">
                                                <div class="card-img-overlay p-2 d-flex flex-column">
                                                    <div>
                                                        <span class="badge mr-2 badge-primary">for Sale</span>
                                                    </div>
                                                    <ul class="list-inline mb-0 mt-auto hover-image">
                                                        <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                            title="" data-original-title="9 Images">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-images"></i><span class="pl-1">9</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-toggle="tooltip" title=""
                                                            data-original-title="2 Video">
                                                            <a href="#" class="text-white hover-primary"
                                                                tabindex="0">
                                                                <i class="far fa-play-circle"></i><span
                                                                    class="pl-1">2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3">
                                                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                        class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                        House</a></h2>
                                                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                    Los Angeles</p>
                                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-bedroom"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-bed text-primary mr-2"></i>3 Br
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-shower"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-shower text-primary mr-2"></i> 3 Ba
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-square"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center text-primary"></i> 2300 Sq.Ft
                                                    </li>
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="1 Garage">
                                                        <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                            <use xlink:href="#icon-Garage"></use>
                                                        </svg>
                                                        <i class="fa-solid fa-warehouse text-primary mr-2"></i> 1 Gr
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Wishlist"><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                            data-toggle="tooltip" title="" tabindex="0"
                                                            data-original-title="Compare"><i
                                                                class="fas fa-exchange-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>





        <section>
            <div class="d-flex bottom-bar-action bottom-bar-action-01 py-2 px-4 bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none"
                style="">
                <div class="media align-items-center">
                    <img src="{{ URL('https://templates.g5plus.net/homeid/images/irene-wallace.png') }}"
                        alt="Irene Wallace" class="mr-4 rounded-circle">
                    <div class="media-body">
                        <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
                        <span class="fs-13 lh-2">Sales Excutive</span>
                    </div>
                </div>
                <div class="ml-auto">
                    {{-- <button type="button" class="btn btn-primary fs-18 p-2 lh-1 mr-1 mb-1 shadow-none"
                        data-toggle="modal" data-target="#modal-messenger">

                        <i class="fa-solid fa-comment"></i></button>
                    <a href="tel:091-545-3939" class="btn btn-primary fs-18 p-2 lh-1 mb-1 shadow-none"
                        target="_blank"><i class="fa-solid fa-phone"></i></a> --}}
                    <ul class="list-inline mb-0 fs-22 pl-2">

                        <li class="list-inline-item mr-2 ml-2 mb-0">
                            <a href="https://line.me/R/ti/p/@Luvdrive?from=page" target="_blank">
                                <i class="fa-brands fa-line text-yudee"></i>
                            </a>
                        </li>


                        <li class="list-inline-item mr-2 ml-2 mb-0">
                            <a href="tel:091-545-3939" target="_blank">
                                <i class="fa-solid fa-phone text-yudee"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="modal fade" id="modal-messenger" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <h4 class="modal-title text-heading" id="exampleModalLabel">Contact Form</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body pb-6">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control form-control-lg border-0"
                                    placeholder="First Name, Last Name">
                            </div>
                            <div class="form-group mb-2">
                                <input type="email" class="form-control form-control-lg border-0"
                                    placeholder="Your Email">
                            </div>
                            <div class="form-group mb-2">
                                <input type="tel" class="form-control form-control-lg border-0"
                                    placeholder="Your phone">
                            </div>
                            <div class="form-group mb-2">
                                <textarea class="form-control border-0" rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
                            </div>
                            <div class="form-group form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                <label class="form-check-label fs-13" for="exampleCheck3">Egestas fringilla
                                    phasellus
                                    faucibus
                                    scelerisque eleifend donec.</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request
                                Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <footer>
        <section class="bg-dark pt-5 pb-6 footer">
            <div class="container ">



                <div class="row justify-content-between bg-dark">
                    <div class="col-md-6 col-lg-3 mb-6 mb-md-0">

                        <a href="#">
                            <img src="{{ URL('images/YuuDee2.png') }}" alt="" width="100"
                                height="55" style="object-fit: contain;">
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">58
                                    Howard Street
                                    #2 San Francisco</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary ">contact@homeid.com</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary">(+68)1221
                                    09876</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary">www.homeid.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-6 mb-md-0">
                        <h5 class="text-white">Popular Searches</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary ">Apartment
                                    for Rent</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"class="nav-link p-0 text-secondary">Apartment
                                    Low to hide</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary">Offices
                                    for
                                    Buy</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary">Offices
                                    for
                                    Rent</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-6 mb-md-0">
                        <h5 class="text-white">Quick links</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Terms
                                    of
                                    Use</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"class="nav-link p-0 text-secondary">Privacy
                                    Policy</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"class="nav-link p-0 text-secondary">Contact
                                    Support</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary">Careers</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-6 mb-md-0">
                        <h5 class="text-white">Sign Up for Our Newsletter</h5>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consecte tur cing elit. Suspe
                            ndisse
                            suscipit sagittis</p>
                        <div class="input-group mb-3">
                            <input id="newsletter1" type="text" class="form-control"
                                placeholder="Email address" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </div>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-skype"></i>
                    </div>
                </div>

                <p class="text-right">&copy; 2023 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>

            </div>
        </section>

    </footer>

    <div id="topButton" class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
        <a href="#"
            class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center in"
            title="Back To Top">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
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
</script>

</body>
{{-- tabpanel --}}
<script src="css/gallerycss/jquery.min.js"></script>
<script src="css/gallerycss/bootstrap/bootstrap.bundle.js"></script>
<script src="js/theme.js"></script>
{{-- Image popup --}}
<script src="css/gallerycss/magnific-popup/jquery.magnific-popup.min.js"></script>


</html>
