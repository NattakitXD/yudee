<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Add Property || Homez - Real Estate ReactJS Template</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" crossorigin="" src="css/ppcss/dashboard.js"></script>
    <script type="module" crossorigin="" src="css/ppcss/script.js"></script>
    <link rel="stylesheet" href="css/ppcss/dashboard1.css">
    <link rel="stylesheet" href="css/ppcss/theme1.css" type="text/css">
    <script src="https://kit.fontawesome.com/8365c6ef59.js" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/js/bootstrap.bundle.min.js"></script> --}}

     <!-- Include Select2 from CDN -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



</head>


<body>



    {{-- <div class="row pb40 d-block d-lg-none m-5">
        <div class="col-lg-12">
            <div class="dashboard_navigationbar d-block d-lg-none">
                <div>
                    <div id="v-tabs1-tab" role="tablist" >
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
                                <div class="sidebar_list_item">
                                    <a class="items-center    " id="v-add-property-tab" data-toggle="tab"
                                    data-target="#v-add-property" role="tab" aria-controls="v-add-property"
                                    aria-selected="true" href="#v-add-property">
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
                                    data-toggle="tab" data-target="#v-review" role="tab" aria-controls="v-review"
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
                                    <a class="items-center    " id="v-profile-tab" data-toggle="tab"
                                        data-target="#v-profile" role="tab" aria-controls="v-profile"
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
    </div> --}}

    {{-- <div class="dashboard_content_wrapper">

                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                    </div>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        @include('dashboard.addproperty')
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        @include('dashboard.profile')
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        @include('dashboard.review')
                    </div>
                </div>

    </div> --}}

    <aside>
        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-md">
                <div class="dashboard__sidebar d-none d-lg-block ">
                    <div class="dashboard_sidebar_list" role="tablist">
                        <div id="v-tabs-tab" role="tablist" >

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
                                    <a class="items-center nav-link " id="v-add-property-tab" data-toggle="pill"
                                    data-target="#v-add-property" type="button" role="tab" aria-controls="v-add-property"
                                    aria-selected="true">Add New Property</a>

                                    {{-- <a class="items-center " id="v-add-property-tab" data-toggle="tab"
                                        data-target="#v-add-property" role="tab" aria-controls="v-add-property"
                                        aria-selected="true" href="#v-add-property">
                                        <i class="fa-solid fa-file-circle-plus mr15"></i>Add New Property
                                    </a> --}}

                                </div>

                                <div class="sidebar_list_item ">
                                    <a class="items-center nav-link " id="v-review-tab" data-toggle="pill"
                                    data-target="#v-review" type="button" role="tab" aria-controls="v-review"
                                    aria-selected="false">Reviews</a>

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
                                <div class="sidebar_list_item">
                                    <a class="items-center    " id="v-review-tab"
                                        data-toggle="tab" data-target="#v-review" role="tab" aria-controls="v-review"
                                        aria-selected="false" href="#v-review">
                                        <i class="fa-solid fa-message mr15"></i>Reviews
                                    </a>
                                </div>
                            </div>
                            <div>
                                <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
                                <div class="sidebar_list_item"><a class="items-center    " href="#">
                                        <i class="fa-solid fa-file-contract mr15"></i>My Package</a>
                                </div>
                                <div class="sidebar_list_item">
                                    <a class="items-center    " id="v-profile-tab" data-toggle="tab"
                                        data-target="#v-profile" role="tab" aria-controls="v-profile"
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

                <div class="tab-content" id="v-tabs-tabContent">
                    <div class="tab-pane fade" id="v-add-property" role="tabpanel"
                        aria-labelledby="v-add-property-tab" tabindex="">
                        @include('dashboard.addproperty')
                    </div>

                    <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab"
                        tabindex="">
                        @include('dashboard.profile')
                    </div>

                    <div class="tab-pane fade" id="v-review" role="tabpanel" aria-labelledby="v-review-tab"
                        tabindex="">
                        @include('dashboard.review')
                    </div>


                </div>

            </div>
        </div>
    </aside>



</body>




</html>
