<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Add Property || Homez - Real Estate ReactJS Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="module" crossorigin="" src="ppcss/dashboard.js"></script>
    <script type="module" crossorigin="" src="ppcss/script.js"></script>
    <link rel="stylesheet" href="ppcss/dashboard.css">
    <link rel="stylesheet" href="testcss/theme.css" type="text/css" />
    <script src="https://kit.fontawesome.com/8365c6ef59.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/js/bootstrap.bundle.min.js"></script>

    <style data-emotion="css" data-s=""></style>
    <style data-emotion="css" data-s=""></style>
     <!-- Include Select2 from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</head>


<body>


    {{-- <header class="header-nav nav-homepage-style light-header position-fixed menu-home4 main-menu">
            <nav class="posr">
                <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6 col-lg-auto">
                            <div class="text-center text-lg-start d-flex align-items-center">
                                <div class="dashboard_header_logo position-relative me-2 me-xl-5"><a class="logo"
                                        href="/"><img src="/images/header-logo2.svg" alt="Header Logo"></a></div><a
                                    class="dashboard_sidebar_toggle_icon text-thm1 vam" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#SidebarPanel"
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
                                                data-bs-toggle="dropdown"><img src="/images/resource/user.png"
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
    </header> --}}

    <div class="row pb40 d-block d-lg-none m-5">
        <div class="col-lg-12">
            <div class="dashboard_navigationbar d-block d-lg-none">
                <div>
                    <div id="v-pills1-tab" role="tablist" >
                        <button class="dropbtn ">
                            <i class="fa-solid fa-bars pr5"> </i>Dashboard Navigation</button>
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
                                <div class="sidebar_list_item"><a class="items-center    " id="v-add-property-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-add-property" role="tab" aria-controls="v-add-property"
                                    aria-selected="false" href="#v-add-property">
                                    <i class="fa-solid fa-file-circle-plus mr15"></i>Add New Property</a>
                                </div>

                                <div class="sidebar_list_item">
                                    <a class="items-center    " href="#">
                                        <i class="fa-solid fa-house mr15"></i></i>My Properties</a>
                                </div>

                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-heart mr15"></i>My Favorites</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-magnifying-glass mr15"></i>Saved Search</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " id="v-review-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-review" role="tab" aria-controls="v-review"
                                    aria-selected="false" href="#v-review">
                                    <i class="fa-solid fa-message mr15"></i>Reviews</a>
                                </div>
                            </div>
                            <div>
                                <p class="fz15 fw400 ff-heading mt30 pl30 mt30">MANAGE ACCOUNT</p>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"><i
                                            class="fa-solid fa-file-contract mr15"></i>My Package</a>
                                </div>

                                <div class="sidebar_list_item">
                                    <a class="items-center    " id="v-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-profile" role="tab" aria-controls="v-profile"
                                        aria-selected="false" href="#v-profile">
                                        <i class="fa-solid fa-circle-user mr15"></i>My Profile</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#"> <i
                                            class="fa-solid fa-right-from-bracket mr15"></i>Logout</a>
                                </div>

                            </div>
                        </ul>
                    </div>

                </div>


            </div>



        </div>
    </div>


    <aside>
        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-md">
                <div class="dashboard__sidebar d-none d-lg-block ">

                    <div class="dashboard_sidebar_list" role="tablist">

                        <div id="v-pills-tab" role="tablist" >

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

                                <div class="sidebar_list_item ">
                                    <a class="items-center " id="v-add-property-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-add-property" role="tab" aria-controls="v-add-property"
                                        aria-selected="false" href="#v-add-property">
                                        <i class="fa-solid fa-file-circle-plus mr15"></i>Add New Property
                                    </a>
                                </div>

                                <div class="sidebar_list_item">
                                    <a class="items-center    " href="#">
                                        <i class="fa-solid fa-house mr15"></i>My Properties</a>
                                </div>

                                <div class="sidebar_list_item"><a class="items-center    " href="#">
                                        <i class="fa-solid fa-heart mr15"></i>My Favorites</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#">
                                        <i class="fa-solid fa-magnifying-glass mr15"></i>Saved Search</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " id="v-review-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-review" role="tab" aria-controls="v-review"
                                    aria-selected="false" href="#v-review">
                                        <i class="fa-solid fa-message mr15"></i>Reviews</a></div>
                            </div>
                            <div>
                                <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
                                <div class="sidebar_list_item"><a class="items-center    " href="#">
                                        <i class="fa-solid fa-file-contract mr15"></i>My Package</a>
                                </div>
                                <div class="sidebar_list_item">
                                    <a class="items-center    " id="v-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-profile" role="tab" aria-controls="v-profile"
                                        aria-selected="false" href="#v-profile">
                                        <i class="fa-solid fa-circle-user mr15"> </i>My Profile</a>
                                </div>
                                <div class="sidebar_list_item"><a class="items-center    " href="#">
                                        <i class="fa-solid fa-right-from-bracket mr15"></i>Logout</a>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-add-property" role="tabpanel"
                        aria-labelledby="v-add-property-tab" tabindex="0">
                        @include('dashboard.addproperty')
                    </div>

                    <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab"
                        tabindex="0">
                        @include('dashboard.profile')
                    </div>

                    <div class="tab-pane fade" id="v-review" role="tabpanel" aria-labelledby="v-review-tab"
                        tabindex="0">
                        @include('dashboard.review')
                    </div>


                </div>

            </div>
        </div>
    </aside>


    <div id="topButton" class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
        <a href="#"
            class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center in"
            title="Back To Top">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>
</body>

</html>
