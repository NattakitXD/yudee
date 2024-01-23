<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" to="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/924b5e10e1.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/chevron-down.css' rel='stylesheet'>

    {{-- X --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
     <script type="module" crossorigin="" src="/assets/js/ppjs/dashboard.js"></script>
    <script type="module" crossorigin="" src="/assets/js/ppjs/script.js"></script>
    <link rel="stylesheet" href="{{ asset('/assets/css/ppcss/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/ppcss/theme.css') }}" type="text/css">
      <!-- Include Select2 from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



    {{-- --CSS BOOSTRAP-- --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     {{-- --CSS SWIPER -- --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
     {{-- --CSS-- --}}
     <link href="{{ asset('/assets/css/mcss/hometest.css') }}" rel="stylesheet" type="text/css" />
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>





</head>

<body data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0" class="" style="">
    @include('layouts.menu')
            @yield('content')


    {{-- ปิดไว้ก่อนไม่งั้นใช้ select 2 ไม่ได้ --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('css/mcss/indextest.js') }}"></script>
</body>
</html>
