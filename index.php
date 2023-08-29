<?php

$content = file_get_contents("http://localhost/15-numara-api/rooms");
$data = json_decode($content, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        MyHotel - Hotel Booking and Room Booking Online Html Responsive Template
    </title>
    <!-- META TAGS -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon" />
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet" />
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-ng-app="">
    <!--MOBILE MENU-->
    <section>
        <div class="mm">
            <div class="mm-inn">
                <div class="mm-logo">
                    <a href="index.html"><img src="images/logo.png" alt="" /> </a>
                </div>
                <div class="mm-icon">
                    <span><i class="fa fa-bars show-menu" aria-hidden="true"></i></span>
                </div>
                <div class="mm-menu">
                    <div class="mm-close">
                        <span><i class="fa fa-times hide-menu" aria-hidden="true"></i></span>
                    </div>
                    <ul>
                        <li><a href="index.html">Home - Default</a></li>
                        <li><a href="room-details.html">Room Details</a></li>
                        <li><a href="room-details-block.html">Room Details Block</a></li>
                        <li><a href="hotel-details.html">Hotel Details</a></li>
                        <li><a href="hotel-detail.html">Hotel Details - 1</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="aminities.html">Aminities</a></li>
                        <li><a href="aminities1.html">Aminities - 1</a></li>
                        <li><a href="menu.html">Food Menu</a></li>
                        <li><a href="menu1.html">Food Menu - 1</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-inner.html">Blog Inner</a></li>
                        <li><a href="dashboard.html">User Dashboard</a></li>
                        <li><a href="db-activity.html">DB Activity</a></li>
                        <li><a href="db-booking.html">DB-Booking</a></li>
                        <li><a href="db-event.html">DB-Event</a></li>
                        <li><a href="db-new-booking.html">DB New Booking</a></li>
                        <li><a href="booking.html">Booking</a></li>
                        <li><a href="collapsible.html">Collapsible</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="form-fields.html">Form Fields</a></li>
                        <li><a href="preloading.html">Preloading</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="gallery1.html">Gallery - 1</a></li>
                        <li><a href="gallery2.html">Gallery - 2</a></li>
                        <li><a href="detail.html">Room Detail</a></li>
                        <li><a href="all-rooms.html">All Rooms</a></li>
                        <li><a href="all-rooms1.html">All Rooms - 1</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="services1.html">Services - 1</a></li>
                        <li><a href="typho-grid.html">Grid Layout</a></li>
                        <li><a href="typo-alert.html">Alert Messages</a></li>
                        <li><a href="typo-all-head.html">All Headers</a></li>
                        <li><a href="typo-badges-labels.html">Labels</a></li>
                        <li><a href="typo-buttons.html">Buttons</a></li>
                        <li><a href="typo-pagination.html">Pagination</a></li>
                        <li><a href="typo-progressbar.html">Progressbar</a></li>
                        <li><a href="typo-slider.html">Image Sliders</a></li>
                        <li><a href="typo-table.html">Table</a></li>
                        <li><a href="typo-buttons.html">Buttons</a></li>
                        <li><a href="typo-pagination.html">Pagination</a></li>
                        <li><a href="typo-progressbar.html">Progressbar</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <!--TOP SECTION-->
        <div class="menu-section">
            <div class="container">
                <div class="row">
                    <div class="top-bar">
                        <ul>
                            <li>
                                <a class="dropdown-button" href="#" data-activates="dropdown1">
                                    My Account <i class="fa fa-angle-down"></i></a>
                            </li>
                            <li><a href="hotel-details.html">Our Hotels</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li>
                                <a class="dropdown-button" href="#" data-activates="dropdown2">Language <i
                                        class="fa fa-angle-down"></i></a>
                            </li>
                            <li><a href="#">Toll Free No: 1800 102 7275</a></li>
                        </ul>
                    </div>
                    <div class="all-drop-down">
                        <!-- Dropdown Structure -->
                        <ul id="dropdown1" class="dropdown-content drop-con-man">
                            <li>
                                <a href="dashboard.html"><img src="images/icon/15.png" alt="" /> My Account</a>
                            </li>
                            <li>
                                <a href="db-profile.html"><img src="images/icon/2.png" alt="" /> My Profile</a>
                            </li>
                            <li>
                                <a href="db-booking.html"><img src="images/icon/16.png" alt="" /> My Bookings</a>
                            </li>
                            <li>
                                <a href="db-event.html"><img src="images/icon/17.png" alt="" /> My Events</a>
                            </li>
                            <li>
                                <a href="db-activity.html"><img src="images/icon/14.png" alt="" /> My Activity</a>
                            </li>
                            <li>
                                <a href="#!" data-toggle="modal" data-target="#modal2"><img src="images/icon/5.png"
                                        alt="" /> Register</a>
                            </li>
                            <li>
                                <a href="#!" data-toggle="modal" data-target="#modal1"><img src="images/icon/6.png"
                                        alt="" /> Log In</a>
                            </li>
                            <li>
                                <a href="#!" data-toggle="modal" data-target="#modal3"><img src="images/icon/13.png"
                                        alt="" /> Forgot Password</a>
                            </li>
                        </ul>
                        <!-- Dropdown Structure -->
                        <ul id="drop-home" class="dropdown-content drop-con-man">
                            <li><a href="index.html">Home - Default</a></li>
                            <li><a href="index-1.html">Home - Reservation</a></li>
                            <li><a href="index-2.html">Home - FullSlider</a></li>
                            <li><a href="index-3.html">Home - Block Color</a></li>
                        </ul>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown2" class="dropdown-content drop-con-man">
                            <li><a href="#!">English</a></li>
                            <li><a href="#!">Spanish</a></li>
                            <li><a href="#!">Hindi</a></li>
                            <li><a href="#!">Russian</a></li>
                            <li><a href="#!">Portuguese</a></li>
                        </ul>
                        <!-- ROOM Dropdown Structure -->
                        <ul id="drop-room" class="dropdown-content drop-con-man">
                            <li><a href="all-rooms.html">All Suite Rooms</a></li>
                            <li><a href="room-details.html">Room Details</a></li>
                            <li>
                                <a href="room-details-block.html">Room Details Block</a>
                            </li>
                            <li><a href="room-details-1.html">Room Parallax</a></li>
                        </ul>
                        <!-- PAGES Dropdown Structure -->
                        <div id="drop-page" class="dropdown-content drop-con-man drop-full">
                            <div class="mm-1">
                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="room-details.html">Room Details - 1</a></li>
                                    <li><a href="room-details-1.html">Room Details - 2</a></li>
                                    <li>
                                        <a href="room-details-block.html">Room Details - 3</a>
                                    </li>
                                    <li><a href="all-rooms.html">All Rooms</a></li>
                                    <li><a href="all-rooms1.html">All Rooms - 1</a></li>
                                    <li><a href="aminities.html">Aminities</a></li>
                                    <li><a href="aminities1.html">Aminities - 1</a></li>
                                </ul>
                            </div>
                            <div class="mm-1">
                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="dashboard.html">User Dashboard</a></li>
                                    <li><a href="db-activity.html">DB Activity</a></li>
                                    <li><a href="db-booking.html">DB-Booking</a></li>
                                    <li><a href="db-event.html">DB-Event</a></li>
                                    <li><a href="db-new-booking.html">DB New Booking</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="mm-1">
                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-inner.html">Blog Inner</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="gallery1.html">Gallery - 1</a></li>
                                    <li><a href="gallery2.html">Gallery - 2</a></li>
                                    <li><a href="collapsible.html">Collapsible</a></li>
                                </ul>
                            </div>
                            <div class="mm-1">
                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="services1.html">Services - 1</a></li>
                                    <li><a href="typho-grid.html">Grid Layout</a></li>
                                    <li><a href="typo-alert.html">Alert Messages</a></li>
                                    <li><a href="form-fields.html">Form Fields</a></li>
                                    <li><a href="menu.html">Food Menu</a></li>
                                </ul>
                            </div>
                            <div class="mm-1">
                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="typo-all-head.html">All Headers</a></li>
                                    <li><a href="typo-badges-labels.html">Labels</a></li>
                                    <li><a href="typo-buttons.html">Buttons</a></li>
                                    <li><a href="typo-pagination.html">Pagination</a></li>
                                    <li><a href="typo-progressbar.html">Progressbar</a></li>
                                    <li><a href="preloading.html">Preloading</a></li>
                                    <li><a href="menu1.html">Food Menu - 1</a></li>
                                </ul>
                            </div>
                            <div class="mm-1">
                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="typo-slider.html">Image Sliders</a></li>
                                    <li><a href="typo-table.html">Table</a></li>
                                    <li><a href="typo-buttons.html">Buttons</a></li>
                                    <li><a href="typo-pagination.html">Pagination</a></li>
                                    <li><a href="typo-progressbar.html">Progressbar</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="" /> </a>
                    </div>
                    <div class="menu-bar">
                        <ul>
                            <li>
                                <a href="#" class="dropdown-button" data-activates="drop-home">Home <i
                                        class="fa fa-angle-down"></i></a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-button" data-activates="drop-room">Rooms <i
                                        class="fa fa-angle-down"></i></a>
                            </li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="aminities1.html">Amenities</a></li>
                            <li>
                                <a href="#" class="dropdown-button" data-activates="drop-page">Pages <i
                                        class="fa fa-angle-down"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--TOP SECTION-->
        <!--Check Availability SECTION-->
        <div>
            <div class="slider fullscreen">
                <ul class="slides">
                    <li>
                        <img src="images/slider/1.jpg" alt="" />
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h5 class="light grey-text text-lighten-3">
                                Here's our small slogan.
                            </h5>
                            <h2>This is our big Tagline!</h2>
                            <p>
                                <?php
?>
                                Hi
                            </p>
                            <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider/2.jpg" alt="" />
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h5 class="light grey-text text-lighten-3">
                                Here's our small slogan.
                            </h5>
                            <h2>This is our big Tagline!</h2>
                            <p>
                                Mauris non placerat nulla. Sed vestibulum quam mauris, et
                                malesuada tortor venenatis at.Aenean euismod sem porta est
                                consectetur posuere. Praesent nisi velit, porttitor ut
                                imperdiet a, pellentesque id mi.
                            </p>
                            <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider/3.jpg" alt="" />
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h5 class="light grey-text text-lighten-3">
                                Here's our small slogan.
                            </h5>
                            <h2>This is our big Tagline!</h2>
                            <p>
                                Mauris non placerat nulla. Sed vestibulum quam mauris, et
                                malesuada tortor venenatis at.Aenean euismod sem porta est
                                consectetur posuere. Praesent nisi velit, porttitor ut
                                imperdiet a, pellentesque id mi.
                            </p>
                            <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider/4.jpg" alt="" />
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h5 class="light grey-text text-lighten-3">
                                Here's our small slogan.
                            </h5>
                            <h2>This is our big Tagline!</h2>
                            <p>
                                Mauris non placerat nulla. Sed vestibulum quam mauris, et
                                malesuada tortor venenatis at.Aenean euismod sem porta est
                                consectetur posuere. Praesent nisi velit, porttitor ut
                                imperdiet a, pellentesque id mi.
                            </p>
                            <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--End Check Availability SECTION-->
        <!--HOTEL ROOMS SECTION-->
        <div class="hom1 hom-com pad-bot-40">
            <div class="container">
                <div class="row">
                    <div class="hom1-title">
                        <h2>Our Hotel Rooms</h2>
                        <div class="head-title">
                            <div class="hl-1"></div>
                            <div class="hl-2"></div>
                            <div class="hl-3"></div>
                        </div>
                        <p>
                            Aenean euismod sem porta est consectetur posuere. Praesent nisi
                            velit, porttitor ut imperdiet a, pellentesque id mi.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="to-ho-hotel">
                        <?php foreach ($data as $room): ?>
                        <div class="col-md-4">
                            <div class="to-ho-hotel-con">
                                <div class="to-ho-hotel-con-1">
                                    <div class="hom-hot-av-tic">Available Tickets:
                                        <?php echo $room['is_available']; ?></div>
                                    <img src="<?php echo $room['image_path'] ?? "images/room/1.jpg"; ?>"
                                        alt="<?php echo $room['name']; ?>" />
                                </div>
                                <div class="to-ho-hotel-con-23">
                                    <div class="to-ho-hotel-con-2">
                                        <a href="all-rooms.html">
                                            <h4><?php echo $room['name']; ?></h4>
                                        </a>
                                    </div>
                                    <div class="to-ho-hotel-con-3">
                                        <ul>
                                            <li>
                                                <div class="dir-rat-star ho-hot-rat-star">
                                                    Rating:
                                                    <?php for ($i = 0; $i < $room['rating']; $i++): ?>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <?php endfor;?>
                                                    <?php for ($i = 0; $i < 5 - $room['rating']; $i++): ?>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <?php endfor;?>
                                                </div>
                                            </li>
                                            <li>
                                                <span
                                                    class="ho-hot-pri-dis"><?php echo $room['discount']; ?></span><span
                                                    class="ho-hot-pri"><?php echo $room['price_original']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <!--END HOTEL ROOMS-->
        <!--TOP SECTION-->
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l">
                            <span class="ol-1"></span>
                            <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                            <span class="ol-4">Standardized Budget Rooms</span>
                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                            <ul>
                                <li>
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis1.png" alt="" /> </a><span>Free WiFi</span>
                                </li>
                                <li>
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/h2.png" alt="" /> </a><span>Breakfast</span>
                                </li>
                                <li>
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis3.png" alt="" /> </a><span>Pool</span>
                                </li>
                                <li>
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis4.png" alt="" /> </a><span>Television</span>
                                </li>
                                <li>
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img
                                            src="images/icon/dis5.png" alt="" /> </a><span>GYM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">
                            <div class="or-1">
                                <span class="or-11">go</span> <span class="or-12">Stays</span>
                            </div>
                            <div class="or-2">
                                <span class="or-21">Get</span> <span class="or-22">70%</span>
                                <span class="or-23">Off</span>
                                <span class="or-24">use code: RG5481WERQ</span>
                                <span class="or-25"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog hom-com pad-bot-0">
            <div class="container">
                <div class="row">
                    <div class="hom1-title">
                        <h2>Photo Gallery</h2>
                        <div class="head-title">
                            <div class="hl-1"></div>
                            <div class="hl-2"></div>
                            <div class="hl-3"></div>
                        </div>
                        <p>
                            Aenean euismod sem porta est consectetur posuere. Praesent nisi
                            velit, porttitor ut imperdiet a, pellentesque id mi.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="inn-services head-typo typo-com mar-bot-0">
                            <ul id="filters" class="clearfix">
                                <li>
                                    <span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span>
                                </li>
                                <li><span class="filter" data-filter=".app">Hotels</span></li>
                                <li>
                                    <span class="filter" data-filter=".card">Aminities</span>
                                </li>
                                <li><span class="filter" data-filter=".icon">Rooms</span></li>
                                <li>
                                    <span class="filter" data-filter=".logo">Food Menu</span>
                                </li>
                                <li><span class="filter" data-filter=".web">Events</span></li>
                            </ul>
                            <div id="portfoliolist">
                                <div class="portfolio logo" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/logo/5.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio app" data-cat="app">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/app/1.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">APP</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio web" data-cat="web">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/web/4.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Web design</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/card/1.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio app" data-cat="app">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/app/3.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">APP</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/card/4.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/card/5.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio logo" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/logo/1.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio app" data-cat="app">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/app/2.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">APP</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/card/2.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio logo" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/logo/6.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio logo" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/logo/7.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio icon" data-cat="icon">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/icon/4.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Icon</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio web" data-cat="web">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/web/3.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Web design</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio icon" data-cat="icon">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/icon/1.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Icon</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio web" data-cat="web">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/web/2.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Web design</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio icon" data-cat="icon">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/icon/2.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Photo Caption</a>
                                                <span class="text-category">Icon</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio icon" data-cat="icon">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/icon/5.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">3D Map</a>
                                                <span class="text-category">Icon</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio web" data-cat="web">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/web/1.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Note</a>
                                                <span class="text-category">Web design</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio logo" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/logo/3.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Native Designers</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio logo" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/logo/4.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Bookworm</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio icon" data-cat="icon">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/icon/3.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Sandwich</a>
                                                <span class="text-category">Icon</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/card/3.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Reality</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio logo" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <img src="img/portfolios/logo/2.jpg" alt="" />
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Speciallisterne</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog hom-com">
            <div class="container">
                <div class="row">
                    <div class="hom1-title">
                        <h2>News & Event</h2>
                        <div class="head-title">
                            <div class="hl-1"></div>
                            <div class="hl-2"></div>
                            <div class="hl-3"></div>
                        </div>
                        <p>
                            Aenean euismod sem porta est consectetur posuere. Praesent nisi
                            velit, porttitor ut imperdiet a, pellentesque id mi.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bot-gal h-gal">
                            <h4>Photo Gallery</h4>
                            <ul>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/8.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/9.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/10.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/11.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/1.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/2.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/3.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/4.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/5.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/6.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/7.jpg"
                                        alt="" />
                                </li>
                                <li>
                                    <img class="materialboxed" data-caption="Hotel Captions" src="images/ami/8.jpg"
                                        alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bot-gal h-vid">
                            <h4>Video Gallery</h4>
                            <iframe src="https://www.youtube.com/embed/mG4G8crGQ34?autoplay=0&showinfo=0&controls=0"
                                allowfullscreen></iframe>
                            <h5>Maecenas sollicitudin lacinia</h5>
                            <p>
                                Maecenas finibus neque a tellus auctor mattis. Aliquam tempor
                                varius ornare. Maecenas dignissim leo leo, nec posuere purus
                                finibus vitae.
                            </p>
                            <p>
                                Quisque vitae neque at tellus malesuada convallis. Phasellus
                                in lectus vitae ex euismod interdum non a lorem. Nulla
                                bibendum. Curabitur mi odio, tempus quis risus cursus.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bot-gal h-blog">
                            <h4>News & Event</h4>
                            <ul>
                                <li>
                                    <a href="#!">
                                        <img src="images/users/2.png" alt="" />
                                        <h5>Joseph, write a review</h5>
                                        <span>3 Dec, 2017</span>
                                        <p>
                                            Curabitur mi odio, tempus quis risus cursus, iaculis
                                            tempor augue.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img src="images/users/3.png" alt="" />
                                        <h5>Joseph, write a review</h5>
                                        <span>3 Dec, 2017</span>
                                        <p>
                                            Curabitur mi odio, tempus quis risus cursus, iaculis
                                            tempor augue.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img src="images/users/4.png" alt="" />
                                        <h5>Joseph, write a review</h5>
                                        <span>3 Dec, 2017</span>
                                        <p>
                                            Curabitur mi odio, tempus quis risus cursus, iaculis
                                            tempor augue.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img src="images/users/5.png" alt="" />
                                        <h5>Joseph, write a review</h5>
                                        <span>3 Dec, 2017</span>
                                        <p>
                                            Curabitur mi odio, tempus quis risus cursus, iaculis
                                            tempor augue.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div>
                <!--TOP SECTION-->
                <div class="hom-footer-section">
                    <div class="container">
                        <div class="row">
                            <div class="foot-com foot-1">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="foot-com foot-2">
                                <h5>Phone: (+404) 142 21 23 78</h5>
                            </div>
                            <div class="foot-com foot-3">
                                <!--<a class="waves-effect waves-light" href="#">online room booking</a>--><a
                                    class="waves-effect waves-light" href="booking.html">room reservation</a>
                            </div>
                            <div class="foot-com foot-4">
                                <a href="#"><img src="images/card.png" alt="" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->
    <footer class="site-footer clearfix">
        <div class="sidebar-container">
            <div class="sidebar-inner">
                <div class="widget-area clearfix">
                    <div class="widget widget_azh_widget">
                        <div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 foot-logo">
                                        <img src="images/logo1.png" alt="logo" />
                                        <p class="hasimg">
                                            Hotels worldwide incl. Infos, Ratings and Photos. Make
                                            your Hotel Reservation cheap.
                                        </p>
                                        <p class="hasimg">
                                            The top-rated hotel booking services.
                                        </p>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Support &amp; Help</h4>
                                        <ul class="two-columns">
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="db-activity.html">DB Activity</a></li>
                                            <li><a href="booking.html">Booking</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="aminities.html">Aminities</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="menu1.html">Food Menu</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Popular Services</h4>
                                        <ul class="two-columns">
                                            <li><a href="all-hotels.html">Our Hotels</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="all-rooms.html">Master Suite</a></li>
                                            <li><a href="all-rooms.html">Mini-Suite</a></li>
                                            <li><a href="all-rooms.html">Ultra Deluxe</a></li>
                                            <li><a href="all-rooms.html">Luxury Room</a></li>
                                            <li><a href="all-rooms.html">Normal Room</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Address</h4>
                                        <p>
                                            28800 Orchard Lake Road, Suite 180 Farmington Hills,
                                            U.S.A. Landmark : Next To Airport
                                        </p>
                                        <p>
                                            <span class="foot-phone">Phone: </span>
                                            <span class="foot-phone">+01 1245 2541</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="foot-sec2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Payment Options</h4>
                                        <p class="hasimg">
                                            <img src="images/payment.png" alt="payment" />
                                        </p>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <h4>Subscribe Now</h4>
                                        <form>
                                            <ul class="foot-subsc">
                                                <li>
                                                    <input type="text" placeholder="Enter your email id" />
                                                </li>
                                                <li>
                                                    <input type="submit" value="submit" />
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="col-sm-12 col-md-5 foot-social">
                                        <h4>Follow with us</h4>
                                        <p>
                                            Join the thousands of other There are many variations of
                                            passages of Lorem Ipsum available
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .widget-area -->
            </div>
            <!-- .sidebar-inner -->
        </div>
        <!-- #quaternary -->
    </footer>
    <section class="copy">
        <div class="container">
            <p>
                copyrights © 2017 RN53Themes.net. &nbsp;&nbsp;All rights reserved.
            </p>
        </div>
    </section>
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... <span>{{ name }}</span></h1>
                    <p>
                        Don't have an account? Create your account. It's take less then a
                        minutes
                    </p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>
                        Don't have an account? Create your account. It's take less then a
                        minutes
                    </p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name" class="validate" />
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate" />
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn" />
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot
                                    password</a>
                                |
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new
                                    account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... <span>{{ name1 }}</span></h1>
                    <p>
                        Don't have an account? Create your account. It's take less then a
                        minutes
                    </p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>
                        Don't have an account? Create your account. It's take less then a
                        minutes
                    </p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate" />
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate" />
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate" />
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate" />
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn" />
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a
                                    already member ? Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... <span>{{ name3 }}</span></h1>
                    <p>
                        Don't have an account? Create your account. It's take less then a
                        minutes
                    </p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>
                        Don't have an account? Create your account. It's take less then a
                        minutes
                    </p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate" />
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn" />
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a
                                    already member ? Login</a>
                                |
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new
                                    account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--ALL SCRIPT FILES-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
    <script src="js/custom.js"></script>
</body>

</html>