{{-- <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Add Property || Homez - Real Estate ReactJS Template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/css/bootstrap.min.css" rel="stylesheet">

        <script type="module" crossorigin="" src="ppcss/1.js"></script>
        <link rel="stylesheet" href="ppcss/2.css">
        <link rel="stylesheet" href="testcss/theme.css" type="text/css" />
        <script src="https://kit.fontawesome.com/8365c6ef59.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

        <style data-emotion="css" data-s=""></style>
        <style data-emotion="css" data-s=""></style>

        <style>
        .css-b62m3t-container {
        position: relative;
        box-sizing: border-box;
     }
        </style>
    </head>


    <body>


        <header class="header-nav nav-homepage-style light-header position-fixed menu-home4 main-menu">
            <nav class="posr">
                <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6 col-lg-auto">
                            <div class="text-center text-lg-start d-flex align-items-center">
                                <div class="dashboard_header_logo position-relative me-2 me-xl-5"><a class="logo"
                                        href="/"><img src="/images/header-logo2.svg" alt="Header Logo"></a></div><a
                                    class="dashboard_sidebar_toggle_icon text-thm1 vam" href="#"
                                    data-toggle="offcanvas" data-target="#SidebarPanel"
                                    aria-controls="SidebarPanelLabel"><img class="img-1" src="/images/dark-nav-icon.svg"
                                        alt="humberger menu"></a>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-auto">
                            <ul class="ace-responsive-menu">
                                <li class="visible_list dropitem"><a class="list-item" href="#"><span
                                            class="title">Home</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li><a class="undefined" href="/">Home v1</a></li>
                                        <li><a class="undefined" href="/home-v2">Home v2</a></li>
                                        <li><a class="undefined" href="/home-v3">Home v3</a></li>
                                        <li><a class="undefined" href="/home-v4">Home v4</a></li>
                                        <li><a class="undefined" href="/home-v5">Home v5</a></li>
                                        <li><a class="undefined" href="/home-v6">Home v6</a></li>
                                        <li><a class="undefined" href="/home-v7">Home v7</a></li>
                                        <li><a class="undefined" href="/home-v8">Home v8</a></li>
                                        <li><a class="undefined" href="/home-v9">Home v9</a></li>
                                        <li><a class="undefined" href="/home-v10">Home v10</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu_style dropitem"><a class="list-item" href="#"><span
                                            class="title">Listing</span><span class="arrow"></span></a>
                                    <ul class="row dropdown-megamenu sub-menu">
                                        <li class="col mega_menu_list">
                                            <h4 class="title">Grid View</h4>
                                            <ul class="sub-menu">
                                                <li><a class="undefined" href="/grid-default">Grid Default</a></li>
                                                <li><a class="undefined" href="/grid-full-3-col">Grid Full Width 3 Cols</a></li>
                                                <li><a class="undefined" href="/grid-full-4-col">Grid Full Width 4 Cols</a></li>
                                                <li><a class="undefined" href="/grid-full-2-col">Grid Full Width 2 Cols</a></li>
                                                <li><a class="undefined" href="/grid-full-1-col-v1">Grid Full Width 1 Cols
                                                        v1</a></li>
                                                <li><a class="undefined" href="/grid-full-1-col-v2">Grid Full Width 1 Cols
                                                        v2</a></li>
                                                <li><a class="undefined" href="/banner-search-v1">Banner Search v1</a></li>
                                                <li><a class="undefined" href="/banner-search-v2">Banner Search v2</a></li>
                                            </ul>
                                        </li>
                                        <li class="col mega_menu_list">
                                            <h4 class="title">Map Style</h4>
                                            <ul class="sub-menu">
                                                <li><a class="undefined" href="/header-map-style">Header Map Style</a></li>
                                                <li><a class="undefined" href="/map-v1">Map V1</a></li>
                                                <li><a class="undefined" href="/map-v2">Map V2</a></li>
                                                <li><a class="undefined" href="/map-v3">Map V3</a></li>
                                                <li><a class="undefined" href="/map-v4">Map V4</a></li>
                                            </ul>
                                        </li>
                                        <li class="col mega_menu_list">
                                            <h4 class="title">List View</h4>
                                            <ul class="sub-menu">
                                                <li><a class="undefined" href="/list-v1">List v1</a></li>
                                                <li><a class="undefined" href="/list-all-style">List All Style</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="visible_list dropitem"><a class="list-item" href="#"><span
                                            class="title menuActive">Property</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="dropitem"><a href="#"><span class="title">Agents</span><span
                                                    class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a class="undefined" href="/agents">Agents</a></li>
                                                <li><a class="undefined" href="/agent-single/1">Agent Single</a></li>
                                                <li><a class="undefined" href="/agency">Agency</a></li>
                                                <li><a class="undefined" href="/agency-single/1">Agency Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropitem"><a href="#"><span class="title">Single Style</span><span
                                                    class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a class="undefined" href="/single-v1/1">Single V1</a></li>
                                                <li><a class="undefined" href="/single-v2/1">Single V2</a></li>
                                                <li><a class="undefined" href="/single-v3/1">Single V3</a></li>
                                                <li><a class="undefined" href="/single-v4/1">Single V4</a></li>
                                                <li><a class="undefined" href="/single-v5/1">Single V5</a></li>
                                                <li><a class="undefined" href="/single-v6/1">Single V6</a></li>
                                                <li><a class="undefined" href="/single-v7/1">Single V7</a></li>
                                                <li><a class="undefined" href="/single-v8/1">Single V8</a></li>
                                                <li><a class="undefined" href="/single-v9/1">Single V9</a></li>
                                                <li><a class="undefined" href="/single-v10/1">Single V10</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropitem"><a href="#"><span
                                                    class="title menuActive">Dashboard</span><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a class="undefined" href="/dashboard-home">Dashboard Home</a></li>
                                                <li><a class="menuActive" href="/dashboard-message">Message</a></li>
                                                <li><a class="undefined" href="/dashboard-add-property">New Property</a></li>
                                                <li><a class="undefined" href="/dashboard-my-properties">My Properties</a>
                                                </li>
                                                <li><a class="undefined" href="/dashboard-my-favourites">My Favorites</a></li>
                                                <li><a class="undefined" href="/dashboard-saved-search">Saved Search</a></li>
                                                <li><a class="undefined" href="/dashboard-reviews">Reviews</a></li>
                                                <li><a class="undefined" href="/dashboard-my-package">My Package</a></li>
                                                <li><a class="undefined" href="/dashboard-my-profile">My Profile</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="visible_list dropitem"><a class="list-item" href="#"><span
                                            class="title">Blog</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li><a class="undefined" href="/blog-list-v1">Blog List V1</a></li>
                                        <li><a class="undefined" href="/blog-list-v2">Blog List V2</a></li>
                                        <li><a class="undefined" href="/blog-list-v3">Blog List V3</a></li>
                                        <li><a class="undefined" href="/blogs/2">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="visible_list dropitem"><a class="list-item" href="#"><span
                                            class="title">Pages</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li><a class="undefined" href="/about">About</a></li>
                                        <li><a class="undefined" href="/contact">Contact</a></li>
                                        <li><a class="undefined" href="/compare">Compate</a></li>
                                        <li><a class="undefined" href="/pricing">Pricing</a></li>
                                        <li><a class="undefined" href="/faq">Faq</a></li>
                                        <li><a class="undefined" href="/login">Login</a></li>
                                        <li><a class="undefined" href="/register">Register</a></li>
                                        <li><a class="undefined" href="/not-found">404</a></li>
                                        <li><a class="undefined" href="/invoice">Invoice</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-auto">
                            <div class="text-center text-lg-end header_right_widgets">
                                <ul class="mb0 d-flex justify-content-center justify-content-sm-end p-0">
                                    <li class="d-none d-sm-block"><a class="text-center mr15" href="/login"><span
                                                class="flaticon-email"></span></a></li>
                                    <li class="d-none d-sm-block"><a class="text-center mr20 notif" href="#"><span
                                                class="flaticon-bell"></span></a></li>
                                    <li class=" user_setting">
                                        <div class="dropdown"><a class="btn" href="#"
                                                data-toggle="dropdown"><img src="/images/resource/user.png"
                                                    alt="user.png"></a>
                                            <div class="dropdown-menu">
                                                <div class="user_setting_content">
                                                    <div>
                                                        <p class="fz15 fw400 ff-heading mb20">MAIN</p><a
                                                            class="dropdown-item  " href="/dashboard-home"><i
                                                                class="flaticon-discovery mr10"></i>Dashboard</a><a
                                                            class="dropdown-item -is-active " href="/dashboard-message"><i
                                                                class="flaticon-chat-1 mr10"></i>Message</a>
                                                    </div>
                                                    <div>
                                                        <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p><a
                                                            class="dropdown-item  " href="/dashboard-add-property"><i
                                                                class="flaticon-new-tab mr10"></i>Add New Property</a><a
                                                            class="dropdown-item  " href="/dashboard-my-properties"><i
                                                                class="flaticon-home mr10"></i>My Properties</a><a
                                                            class="dropdown-item  " href="/dashboard-my-favourites"><i
                                                                class="flaticon-like mr10"></i>My Favorites</a><a
                                                            class="dropdown-item  " href="/dashboard-saved-search"><i
                                                                class="flaticon-search-2 mr10"></i>Saved Search</a><a
                                                            class="dropdown-item  " href="/dashboard-review"><i
                                                                class="flaticon-review mr10"></i>Reviews</a>
                                                    </div>
                                                    <div>
                                                        <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p><a
                                                            class="dropdown-item  " href="/dashboard-my-package"><i
                                                                class="flaticon-protection mr10"></i>My Package</a><a
                                                            class="dropdown-item  " href="/dashboard-my-profile"><i
                                                                class="flaticon-user mr10"></i>My Profile</a><a
                                                            class="dropdown-item  " href="/login"><i
                                                                class="flaticon-exit mr10"></i>Logout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>


        <div class="row pb40 d-block d-lg-none m-5">
            <div class="col-lg-12">
                <div class="dashboard_navigationbar d-block d-lg-none">
                    <div class="dropdown "><button class="dropbtn "><i class="fa-solid fa-bars pr5"></i>Dashboard
                            Navigation</button>
                        <ul class="dropdown-content show">
                            <div>
                                <p class="fz15 fw400 ff-heading mt30 pl30 mt-0">MAIN</p>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-chart-line mr15"></i>Dashboard</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-comment-dots mr15"></i>Message</a>
                                </div>
                            </div>
                            <div>
                                <p class="fz15 fw400 ff-heading mt30 pl30 mt30">MANAGE LISTINGS</p>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-file-circle-plus mr15"></i>Add New Property</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-house mr15"></i></i>My Properties</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-heart mr15"></i>My Favorites</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-magnifying-glass mr15"></i>Saved Search</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-message mr15"></i>Reviews</a>
                                </div>
                            </div>
                            <div>
                                <p class="fz15 fw400 ff-heading mt30 pl30 mt30">MANAGE ACCOUNT</p>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-file-contract mr15"></i>My Package</a></div>

                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-circle-user mr15"></i>My Profile</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"> <i
                                            class="fa-solid fa-right-from-bracket mr15"></i>Logout</a></div>

                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-md">
                <div class="dashboard__sidebar d-none d-lg-block ">
                    <div class="dashboard_sidebar_list">
                        <div>
                            <p class="fz15 fw400 ff-heading mt-0">MAIN</p>
                            <div class="sidebar_list_item"><a class="items-center    " href="/">
                                    <i class="fa-solid fa-chart-line mr15"></i>Dashboard</a>
                            </div>

                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-comment-dots mr15"></i>Message</a>
                            </div>

                        </div>
                        <div>
                            <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
                            <div class="sidebar_list_item -is-active"><a class="items-center -is-active" href="#">
                                    <i class="fa-solid fa-file-circle-plus mr15"></i>Add New Property</a>
                            </div>

                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-house mr15"></i>My Properties</a>
                            </div>

                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-heart mr15"></i>My Favorites</a>
                            </div>
                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-magnifying-glass mr15"></i>Saved Search</a>
                            </div>
                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-message mr15"></i>Reviews</a></div>
                        </div>
                        <div>
                            <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-file-contract mr15"></i>My Package</a>
                            </div>
                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-circle-user mr15"></i>My Profile</a>
                            </div>
                            <div class="sidebar_list_item"><a class="items-center    " href="#">
                                    <i class="fa-solid fa-right-from-bracket mr15"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard__main pl0-md">
                    <div class="dashboard__content property-page bgc-f7">
                        <div class="row align-items-center pb40">
                            <div class="col-lg-12">
                                <div class="dashboard_title_area">
                                    <h2>Add New Property</h2>
                                    <p class="text">We are glad to see you again!</p>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">

                                    <div class="navtab-style1">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                                <button class="nav-link-ap active fw600 ms-3" id="nav-item1-tab"
                                                    data-toggle="tab" data-target="#nav-item1" type="button"
                                                    role="tab" aria-controls="nav-item1" aria-selected="true">
                                                    1. Description
                                                </button>
                                                <button class="nav-link-ap fw600" id="nav-item2-tab" data-toggle="tab"
                                                    data-target="#nav-item2" type="button" role="tab"
                                                    aria-controls="nav-item2" aria-selected="false">2. Media
                                                </button>
                                                <button class="nav-link-ap fw600" id="nav-item3-tab" data-toggle="tab"
                                                    data-target="#nav-item3" type="button" role="tab"
                                                    aria-controls="nav-item3" aria-selected="false">3. Location
                                                </button>
                                                <button class="nav-link-ap fw600" id="nav-item4-tab" data-toggle="tab"
                                                    data-target="#nav-item4" type="button" role="tab"
                                                    aria-controls="nav-item4" aria-selected="false">4. Detail
                                                </button>
                                                <button class="nav-link-ap fw600" id="nav-item5-tab" data-toggle="tab"
                                                    data-target="#nav-item5" type="button" role="tab"
                                                    aria-controls="nav-item5" aria-selected="false">5. Amenities
                                                </button>
                                            </div>
                                        </nav>

                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                                                aria-labelledby="nav-item1-tab">
                                                <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                    <h4 class="title fz17 mb30">Property Description</h4>
                                                    <form class="form-style1">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="mb20">
                                                                    <label class="heading-color ff-heading fw600 mb10">Title</label>
                                                                        <input  type="text" class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="mb20">
                                                                    <label  class="heading-color ff-heading fw600 mb10">Description</label>
                                                                    <textarea cols="30" rows="5" placeholder="There are many variations of passages."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20">
                                                                    <label class="heading-color ff-heading fw600 mb10">Select Category</label>
                                                                    <div class="location-area">
                                                                        <div id="result-container"></div>

                                                                        <div class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-4-live-region" class="css-7pg0cj-a11yText"></span>
                                                                            <span aria-live="polite" aria-atomic="false" aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                                                                            <div class="select__control css-13cymwt-control">
                                                                                <div class="select__value-container select__value-container--is-multi select__value-container--has-value css-1dyz3mf">
                                                                                    <div class="select__multi-value css-1p3m7a8-multiValue">
                                                                                        <div class="select__multi-value__label css-9jq23d">Bungalow</div>
                                                                                        <div role="button" class="select__multi-value__remove css-v7duua" aria-label="Remove Bungalow">
                                                                                            <svg height="14"  width="14" viewBox="0 0 20 20"  aria-hidden="true" focusable="false"  class="css-8mmkcg">
                                                                                            <path
                                                                                                    d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m" data-value="">
                                                                                        <input  class="select__input" autocapitalize="none" autocomplete="off" autocorrect="off"
                                                                                            id="react-select-4-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list"
                                                                                            aria-expanded="false"  aria-haspopup="true"  aria-required="true"
                                                                                            role="combobox" value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="select__indicators css-1wy0on6">
                                                                                    <div class="select__indicator select__clear-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <span class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                        <svg  height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                        <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div><input name="colors" type="hidden" value="Bungalow"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20">
                                                                    <label class="heading-color ff-heading fw600 mb10">Listed in</label>
                                                                    <div class="location-area">
                                                                        <div class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-5-live-region" class="css-7pg0cj-a11yText"></span>
                                                                            <span aria-live="polite" aria-atomic="false" aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                                                                            <div class="select__control css-13cymwt-control">
                                                                                <div class="select__value-container select__value-container--is-multi select__value-container--has-value css-1dyz3mf">
                                                                                    <div class="select__multi-value css-1p3m7a8-multiValue">
                                                                                        <div class="select__multi-value__label css-9jq23d">Active</div>
                                                                                        <div role="button" class="select__multi-value__remove css-v7duua" aria-label="Remove Active">
                                                                                            <svg  height="14"  width="14" viewBox="0 0 20 20"aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                                <path
                                                                                                    d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m" data-value="">
                                                                                        <input class="select__input" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-5-input"
                                                                                            spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true"
                                                                                            aria-required="true" role="combobox" value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="select__indicators css-1wy0on6">
                                                                                    <div class="select__indicator select__clear-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <span class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div><input name="colors" type="hidden"value="Active"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20">
                                                                    <label class="heading-color ff-heading fw600 mb10">Property Status</label>
                                                            <div class="location-area">
                                                                        <div class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-6-live-region" class="css-7pg0cj-a11yText"></span>
                                                                            <span aria-live="polite" aria-atomic="false" aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                                                                            <div class="select__control css-13cymwt-control">
                                                                                <div class="select__value-container select__value-container--is-multi select__value-container--has-value css-1dyz3mf">
                                                                                    <div class="select__multi-value css-1p3m7a8-multiValue">
                                                                                        <div class="select__multi-value__label css-9jq23d">Pending</div>
                                                                                        <div role="button" class="select__multi-value__remove css-v7duua" aria-label="Remove Pending">
                                                                                            <svg height="14" width="14" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                                <path
                                                                                                    d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m" data-value="">
                                                                                        <input class="select__input" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-6-input"
                                                                                            spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" aria-expanded="false"
                                                                                            aria-haspopup="true" aria-required="true" role="combobox" value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <div class="select__indicator select__clear-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <span class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div><input name="colors" type="hidden"value="Pending"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb30">
                                                                    <label class="heading-color ff-heading fw600 mb10">Price in $</label>
                                                                    <input type="text" class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb30">
                                                                    <label class="heading-color ff-heading fw600 mb10">Yearly Tax Rate</label>
                                                                    <input type="text" class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb30">
                                                                    <label class="heading-color ff-heading fw600 mb10">After Price Label</label>
                                                                    <input type="text"class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-item2" role="tabpanel"
                                                aria-labelledby="nav-item2-tab">
                                                <div
                                                    class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                    <h4 class="title fz17 mb30">Upload photos of your property</h4>
                                                    <form class="form-style1">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                                                                    <div class="icon mb30">
                                                                        <i class="fa-solid fa-file-arrow-up"></i>
                                                                    </div>
                                                                    <h4 class="title fz17 mb10">Upload/Drag photos of your property</h4>
                                                                    <p class="text mb25">Photos must be JPEG or PNG formatand at least 2048x768</p>
                                                                    <label class="ud-btn btn-white">Browse Files
                                                                        <input id="fileInput" type="file" multiple="" class="ud-btn btn-white" style="display: none;">
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="row profile-box position-relative d-md-flex align-items-end mb50">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <h4 class="title fz17 mb30">Video Option</h4>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb30">
                                                                    <label class="heading-color ff-heading fw600 mb10">Video from</label>
                                                                    <div class="location-area">
                                                                        <div class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-7-live-region"
                                                                                class="css-7pg0cj-a11yText">
                                                                            </span>
                                                                            <span aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText">
                                                                            </span>
                                                                            <div id="result-container">
                                                                                <div class="select__control css-13cymwt-control">
                                                                                    <div class="select__value-container select__value-container--is-multi select__value-container--has-value css-1dyz3mf">
                                                                                        <div  class="select__multi-value css-1p3m7a8-multiValue">
                                                                                            <div class="select__multi-value__label css-9jq23d">Facebook</div>
                                                                                            <div role="button" class="select__multi-value__remove css-v7duua" aria-label="Remove Facebook">
                                                                                                <svg height="14"  width="14" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                                    <path
                                                                                                        d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="select__input-container css-19bb58m" data-value="">
                                                                                            <input class="select__input" autocapitalize="none" autocomplete="off"  autocorrect="off"  id="react-select-7-input"
                                                                                                spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" aria-expanded="false"  aria-haspopup="true"
                                                                                                aria-required="true"  role="combobox" value=""
                                                                                                style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="select__indicators css-1wy0on6">
                                                                                        <div class="select__indicator select__clear-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                            <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                                <path
                                                                                                    d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                        <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer" aria-hidden="true">
                                                                                            <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true"  focusable="false"  class="css-8mmkcg">
                                                                                                <path
                                                                                                    d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div><input name="colors" type="hidden"  value="Facebook"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb30">
                                                                    <label class="heading-color ff-heading fw600 mb10">Embed Video id</label><input type="text" class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <h4 class="title fz17 mb30">Virtual Tour</h4>
                                                            <div class="col-sm-6 col-xl-12">
                                                                <div class="mb30">
                                                                    <label class="heading-color ff-heading fw600 mb10">Virtual Tour</label>
                                                                    <input type="text" class="form-control-ap" placeholder="Virtual Tour">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-item3" role="tabpanel"
                                                aria-labelledby="nav-item3-tab">
                                                <div
                                                    class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                    <h4 class="title fz17 mb30">Listing Location</h4>
                                                    <form class="form-style1">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Address</label><input
                                                                        type="text" class="form-control-ap"
                                                                        placeholder="Your Name"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Country
                                                                        /
                                                                        State</label>
                                                                    <div class="location-area">
                                                                        <div
                                                                            class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-8-live-region"
                                                                                class="css-7pg0cj-a11yText"></span><span
                                                                                aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText"></span>
                                                                            <div
                                                                                class="select__control css-13cymwt-control">
                                                                                <div
                                                                                    class="select__value-container select__value-container--is-multi css-hlgwow">
                                                                                    <div class="select__placeholder css-1jqq78o-placeholder"
                                                                                        id="react-select-8-placeholder">
                                                                                        Select...
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m"
                                                                                        data-value=""><input
                                                                                            class="select__input"
                                                                                            autocapitalize="none"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            id="react-select-8-input"
                                                                                            spellcheck="false"
                                                                                            tabindex="0" type="text"
                                                                                            aria-autocomplete="list"
                                                                                            aria-expanded="false"
                                                                                            aria-haspopup="true"
                                                                                            aria-required="true"
                                                                                            role="combobox"
                                                                                            aria-describedby="react-select-8-placeholder"
                                                                                            value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <span
                                                                                        class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20" width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </div><input required="" tabindex="-1"
                                                                                aria-hidden="true"
                                                                                class="css-1a0ro4n-requiredInput"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">City</label>
                                                                    <div class="location-area">
                                                                        <div
                                                                            class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-9-live-region"
                                                                                class="css-7pg0cj-a11yText"></span><span
                                                                                aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText"></span>
                                                                            <div
                                                                                class="select__control css-13cymwt-control">
                                                                                <div
                                                                                    class="select__value-container select__value-container--is-multi css-hlgwow">
                                                                                    <div class="select__placeholder css-1jqq78o-placeholder"
                                                                                        id="react-select-9-placeholder">
                                                                                        Select...
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m"
                                                                                        data-value=""><input
                                                                                            class="select__input"
                                                                                            autocapitalize="none"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            id="react-select-9-input"
                                                                                            spellcheck="false"
                                                                                            tabindex="0" type="text"
                                                                                            aria-autocomplete="list"
                                                                                            aria-expanded="false"
                                                                                            aria-haspopup="true"
                                                                                            aria-required="true"
                                                                                            role="combobox"
                                                                                            aria-describedby="react-select-9-placeholder"
                                                                                            value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <span
                                                                                        class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20" width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </div><input required="" tabindex="-1"
                                                                                aria-hidden="true"
                                                                                class="css-1a0ro4n-requiredInput"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Country</label>
                                                                    <div class="location-area">
                                                                        <div
                                                                            class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-10-live-region"
                                                                                class="css-7pg0cj-a11yText"></span><span
                                                                                aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText"></span>
                                                                            <div
                                                                                class="select__control css-13cymwt-control">
                                                                                <div
                                                                                    class="select__value-container select__value-container--is-multi css-hlgwow">
                                                                                    <div class="select__placeholder css-1jqq78o-placeholder"
                                                                                        id="react-select-10-placeholder">
                                                                                        Select...
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m"
                                                                                        data-value=""><input
                                                                                            class="select__input"
                                                                                            autocapitalize="none"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            id="react-select-10-input"
                                                                                            spellcheck="false"
                                                                                            tabindex="0" type="text"
                                                                                            aria-autocomplete="list"
                                                                                            aria-expanded="false"
                                                                                            aria-haspopup="true"
                                                                                            aria-required="true"
                                                                                            role="combobox"
                                                                                            aria-describedby="react-select-10-placeholder"
                                                                                            value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <span
                                                                                        class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20" width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </div><input required="" tabindex="-1"
                                                                                aria-hidden="true"
                                                                                class="css-1a0ro4n-requiredInput"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Zip</label><input
                                                                        type="text" class="form-control-ap"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Neighborhood</label><input
                                                                        type="text" class="form-control-ap"
                                                                        placeholder="Neighborhood"></div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="mb20 mt30">
                                                                    <label class="heading-color ff-heading fw600 mb30">Place the listing pin on the map</label>
                                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61986.891901766154!2d100.4506952486328!3d13.828182899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1705384925758!5m2!1sth!2sth"
                                                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                                    </iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb30"><label
                                                                        class="heading-color ff-heading fw600 mb10">Latitude</label><input
                                                                        type="text" class="form-control-ap"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb30"><label
                                                                        class="heading-color ff-heading fw600 mb10">Longitude</label><input
                                                                        type="text" class="form-control-ap"></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-item4" role="tabpanel"
                                                aria-labelledby="nav-item4-tab">
                                                <div
                                                    class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                    <h4 class="title fz17 mb30">Listing Details</h4>
                                                    <form class="form-style1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Size in
                                                                        ft
                                                                        (only numbers)</label><input type="text"
                                                                        class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Lot
                                                                        size in ft
                                                                        (only numbers)</label><input type="text"
                                                                        class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Rooms</label><input
                                                                        type="text" class="form-control-ap"
                                                                        placeholder="Your Name"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Bedrooms</label><input
                                                                        type="text" class="form-control-ap"
                                                                        placeholder="Your Name"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Bathrooms</label><input
                                                                        type="text" class="form-control-ap"
                                                                        placeholder="Your Name"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Custom
                                                                        ID
                                                                        (text)</label><input type="text"
                                                                        class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Garages</label><input
                                                                        type="text" class="form-control-ap"
                                                                        placeholder="Your Name"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Garage
                                                                        size</label><input type="text"
                                                                        class="form-control-ap" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Year
                                                                        built
                                                                        (numeric)</label><input type="text"
                                                                        class="form-control-ap"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Available
                                                                        from
                                                                        (date)</label><input type="text"
                                                                        class="form-control" placeholder="99.aa.yyyy">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Basement</label><input
                                                                        type="text" class="form-control"
                                                                        placeholder="Your Name"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Extra
                                                                        details</label><input type="text"
                                                                        class="form-control" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Roofing</label><input
                                                                        type="text" class="form-control"
                                                                        placeholder="Your Name"></div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Exterior
                                                                        Material</label><input type="text"
                                                                        class="form-control" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Structure
                                                                        type</label>
                                                                    <div class="location-area">
                                                                        <div
                                                                            class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-11-live-region"
                                                                                class="css-7pg0cj-a11yText"></span><span
                                                                                aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText"></span>
                                                                            <div
                                                                                class="select__control css-13cymwt-control">
                                                                                <div
                                                                                    class="select__value-container select__value-container--is-multi select__value-container--has-value css-1dyz3mf">
                                                                                    <div
                                                                                        class="select__multi-value css-1p3m7a8-multiValue">
                                                                                        <div
                                                                                            class="select__multi-value__label css-9jq23d">
                                                                                            Apartments</div>
                                                                                        <div role="button"
                                                                                            class="select__multi-value__remove css-v7duua"
                                                                                            aria-label="Remove Apartments">
                                                                                            <svg height="14"
                                                                                                width="14"
                                                                                                viewBox="0 0 20 20"
                                                                                                aria-hidden="true"
                                                                                                focusable="false"
                                                                                                class="css-8mmkcg">
                                                                                                <path
                                                                                                    d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m"
                                                                                        data-value=""><input
                                                                                            class="select__input"
                                                                                            autocapitalize="none"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            id="react-select-11-input"
                                                                                            spellcheck="false"
                                                                                            tabindex="0"
                                                                                            type="text"
                                                                                            aria-autocomplete="list"
                                                                                            aria-expanded="false"
                                                                                            aria-haspopup="true"
                                                                                            aria-required="true"
                                                                                            role="combobox"
                                                                                            value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <div class="select__indicator select__clear-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20"
                                                                                            width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                            </path>
                                                                                        </svg></div><span
                                                                                        class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20"
                                                                                            width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div><input name="structureType"
                                                                                    type="hidden" value="Apartments">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Floors
                                                                        no</label>
                                                                    <div class="location-area">
                                                                        <div
                                                                            class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-12-live-region"
                                                                                class="css-7pg0cj-a11yText"></span><span
                                                                                aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText"></span>
                                                                            <div
                                                                                class="select__control css-13cymwt-control">
                                                                                <div
                                                                                    class="select__value-container select__value-container--is-multi css-hlgwow">
                                                                                    <div class="select__placeholder css-1jqq78o-placeholder"
                                                                                        id="react-select-12-placeholder">
                                                                                        Select...
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m"
                                                                                        data-value=""><input
                                                                                            class="select__input"
                                                                                            autocapitalize="none"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            id="react-select-12-input"
                                                                                            spellcheck="false"
                                                                                            tabindex="0"
                                                                                            type="text"
                                                                                            aria-autocomplete="list"
                                                                                            aria-expanded="false"
                                                                                            aria-haspopup="true"
                                                                                            aria-required="true"
                                                                                            role="combobox"
                                                                                            aria-describedby="react-select-12-placeholder"
                                                                                            value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <span
                                                                                        class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20"
                                                                                            width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </div><input required="" tabindex="-1"
                                                                                aria-hidden="true"
                                                                                class="css-1a0ro4n-requiredInput"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Energy
                                                                        Class</label>
                                                                    <div class="location-area">
                                                                        <div
                                                                            class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-13-live-region"
                                                                                class="css-7pg0cj-a11yText"></span><span
                                                                                aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText"></span>
                                                                            <div
                                                                                class="select__control css-13cymwt-control">
                                                                                <div
                                                                                    class="select__value-container select__value-container--is-multi css-hlgwow">
                                                                                    <div class="select__placeholder css-1jqq78o-placeholder"
                                                                                        id="react-select-13-placeholder">
                                                                                        Select...
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m"
                                                                                        data-value=""><input
                                                                                            class="select__input"
                                                                                            autocapitalize="none"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            id="react-select-13-input"
                                                                                            spellcheck="false"
                                                                                            tabindex="0"
                                                                                            type="text"
                                                                                            aria-autocomplete="list"
                                                                                            aria-expanded="false"
                                                                                            aria-haspopup="true"
                                                                                            aria-required="true"
                                                                                            role="combobox"
                                                                                            aria-describedby="react-select-13-placeholder"
                                                                                            value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <span
                                                                                        class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20"
                                                                                            width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </div><input required="" tabindex="-1"
                                                                                aria-hidden="true"
                                                                                class="css-1a0ro4n-requiredInput"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-4">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Energy
                                                                        index in
                                                                        kWh/m2a</label>
                                                                    <div class="location-area">
                                                                        <div
                                                                            class="select-custom pl-0 css-b62m3t-container">
                                                                            <span id="react-select-14-live-region"
                                                                                class="css-7pg0cj-a11yText"></span><span
                                                                                aria-live="polite" aria-atomic="false"
                                                                                aria-relevant="additions text"
                                                                                class="css-7pg0cj-a11yText"></span>
                                                                            <div
                                                                                class="select__control css-13cymwt-control">
                                                                                <div
                                                                                    class="select__value-container select__value-container--is-multi css-hlgwow">
                                                                                    <div class="select__placeholder css-1jqq78o-placeholder"
                                                                                        id="react-select-14-placeholder">
                                                                                        Select...
                                                                                    </div>
                                                                                    <div class="select__input-container css-19bb58m"
                                                                                        data-value=""><input
                                                                                            class="select__input"
                                                                                            autocapitalize="none"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            id="react-select-14-input"
                                                                                            spellcheck="false"
                                                                                            tabindex="0"
                                                                                            type="text"
                                                                                            aria-autocomplete="list"
                                                                                            aria-expanded="false"
                                                                                            aria-haspopup="true"
                                                                                            aria-required="true"
                                                                                            role="combobox"
                                                                                            aria-describedby="react-select-14-placeholder"
                                                                                            value=""
                                                                                            style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="select__indicators css-1wy0on6">
                                                                                    <span
                                                                                        class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                    <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                        aria-hidden="true"><svg
                                                                                            height="20"
                                                                                            width="20"
                                                                                            viewBox="0 0 20 20"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </div><input required="" tabindex="-1"
                                                                                aria-hidden="true"
                                                                                class="css-1a0ro4n-requiredInput"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="mb20"><label
                                                                        class="heading-color ff-heading fw600 mb10">Owner/
                                                                        Agent
                                                                        nots (not visible on front end)</label>
                                                                    <textarea cols="30" rows="5" placeholder="There are many variations of passages."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-item5" role="tabpanel"
                                                aria-labelledby="nav-item5-tab">
                                                <div
                                                    class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                    <h4 class="title fz17 mb30">Select Amenities</h4>
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-lg-3 col-xxl-2">
                                                                <div class="checkbox-style1"><label
                                                                        class="custom_checkbox">Attic<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Basketball court<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Air Conditioning<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Lawn<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Swimming Pool<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Barbeque<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Microwave<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label></div>
                                                            </div>
                                                            <div class="col-sm-6 col-lg-3 col-xxl-2">
                                                                <div class="checkbox-style1"><label
                                                                        class="custom_checkbox">TV
                                                                        Cable<input type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Dryer<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Outdoor Shower<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Washer<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Gym<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Ocean view<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Private space<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label></div>
                                                            </div>
                                                            <div class="col-sm-6 col-lg-3 col-xxl-2">
                                                                <div class="checkbox-style1"><label
                                                                        class="custom_checkbox">Lake
                                                                        view<input type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Wine cellar<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Front yard<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Refrigerator<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">WiFi<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Laundry<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Sauna<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>



        <div id="topButton" class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
            <a href="#"
                class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center in"
                title="Back To Top">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
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
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownBtn = document.querySelector(".dropbtn");
            const dropdownContent = document.querySelector(".dropdown-content");

            dropdownBtn.addEventListener("click", function() {
                dropdownContent.classList.toggle("show");
            });

            document.addEventListener("click", function(event) {
                if (!event.target.matches(".dropbtn")) {
                    const dropdowns = document.getElementsByClassName("dropdown-content");
                    for (let i = 0; i < dropdowns.length; i++) {
                        const openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains("show")) {
                            openDropdown.classList.remove("show");
                        }
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarItems = document.querySelectorAll(".sidebar_list_item");
            const items = document.querySelectorAll(".items-center");

            sidebarItems.forEach(function(item) {
                item.addEventListener("click", function() {
                    // ลบคลาส -is-active ออกจากทุก elements ที่มีคลาส -is-active
                    sidebarItems.forEach(function(otherItem) {
                        otherItem.classList.remove("-is-active");
                    });

                    // เพิ่มคลาส -is-active เข้าไปที่ element ที่ถูกคลิก
                    item.classList.add("-is-active");
                });
            });

            items.forEach(function(item) {
                item.addEventListener("click", function() {
                    // ลบคลาส -is-active ออกจากทุก elements ที่มีคลาส -is-active
                    items.forEach(function(otherItem) {
                        otherItem.classList.remove("-is-active");
                    });

                    // เพิ่มคลาส -is-active เข้าไปที่ element ที่ถูกคลิก
                    item.classList.add("-is-active");
                });
            });
        });
    </script>

    <script>
        // JavaScript function to show/hide content based on the selected tab
        function showContent(tabId) {
            // Hide all content sections
            document.querySelectorAll('.tab-content > div').forEach(function (content) {
                content.style.display = 'none';
            });

            // Show the selected content section
            document.getElementById(tabId).style.display = 'block';
        }
    </script>
</html> --}}