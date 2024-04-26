<?php
session_start();
ob_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Canopy | Fitness Tracker</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo1.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo2.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="personal.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="personal.php">Personal</a></li>
                                    <li><a href="courses.php">Courses</a></li>
                                    <li><a href="discover.php">Discover</a>
                                    <li><a href="contact.php">Contact</a>

                                        <ul class="submenu">
                                            <li><a href="fittube.html">FitTube</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="index.html" class="btn">sign out</a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Courses</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Team -->
        <section class="team-area fix section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55">
                            <h2>Body building</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Course begin -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <div class="about-icon__img-wrapper">
                                        <img src="assets/img/courses/body_building/b01.png" alt="">
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <span class="month">Overview of Body Building
                                    </span><br><br>
                                    <p class="mb-25">$3</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Introduction to the body building process and the benefits of having
                                                strong, toned body.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Provides basic knowledge about body, their structure and functions.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>An introduction to the fundamentals of training for body building,
                                                including load, volume, and frequency.</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Recommend a basic body training schedule for beginners.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="course_element.php?course_name=Overview%20of%20Body%20Building" class="border-btn border-btn2">Start</a>
                                    <br><br><br>
                                    <span style="display: flex; justify-content: center; align-items: center;">
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">body-building</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">30-day</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">24-excercise</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course end -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <div class="about-icon__img-wrapper">
                                        <img src="assets/img/courses/body_building/b02.png" alt="">
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <span class="month">Muscle training techniques
                                    </span><br><br>
                                    <p class="mb-25">$3</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Instructions on techniques to properly and safely perform muscle building
                                                exercises.</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Provides a variety of exercises that focus on different muscle groups
                                                such as chest muscles, shoulder muscles, back muscles, leg muscles and
                                                arm muscles.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Instructions on technique, range of motion and intensity to stimulate
                                                muscle growth.</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Introduction to muscle training tools and equipment and how to use them
                                                effectively.</p>
                                        </div>
                                    </div>
                                    <a  href="course_element.php?course_name=Muscle%20Training%20Techniques" class="border-btn border-btn2">Start</a>
                                    <br><br><br>
                                    <span style="display: flex; justify-content: center; align-items: center;">
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">body-building</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">60-day</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">55-excercise</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30">
                            <div class="properties__card">
                                <div class="properties__caption">
                                    <div class="about-icon">
                                        <div class="about-icon__img-wrapper">
                                            <img src="assets/img/courses/body_building/b03.png" alt="">
                                        </div>
                                    </div>
                                    <span class="month">Muscle training planning
                                    </span><br><br>
                                    <p class="mb-25">$3</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Instructions on how to create a muscle training plan that suits your
                                                personal goals and fitness level.</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Introduction to muscle training methods such as full-body training,
                                                muscle group division, or push-pull-legs training.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Instructions on how to choose weight, amount and frequency of training
                                                for each muscle group.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Provides a reliable and flexible muscle training schedule.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="course_element.php?course_name=Muscle%20Training%20Planning" class="border-btn border-btn2">Start</a>
                                    <br><br><br>
                                    <span style="display: flex; justify-content: center; align-items: center;">
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">body-building</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">60-day</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">60-excercise</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course begin -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <div class="about-icon__img-wrapper">
                                        <img src="assets/img/courses/body_building/b04.png" alt="">
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <span class="month">Nutrition and muscle building
                                    </span><br><br>
                                    <p class="mb-25">$3</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Provides basic knowledge about nutrition and its role in the muscle
                                                building process. </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Guide to the amount of calories, protein, carbohydrates and fat needed to
                                                gain muscle.</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Introduction to protein-rich food sources such as meat, fish, eggs,
                                                beans, nuts and manufactured milk.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Recommended popular nutritional supplements such as whey protein,
                                                creatine and bcaa.</p>
                                        </div>
                                    </div>
                                    <a href="course_element.php?course_name=Nutrition%20and%20Muscle%20Building" class="border-btn border-btn2">Start</a>
                                    <br><br><br>
                                    <span style="display: flex; justify-content: center; align-items: center;">
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">body-building</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">30-day</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">28-excercise</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course end -->
                    <!-- Course begin -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <div class="about-icon__img-wrapper">
                                        <img src="assets/img/courses/body_building/b05.png" alt="">
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <span class="month">Measuring progress and tracking body index</span><br><br>
                                    <p class="mb-25">$3</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Instructions on how to measure progress and track body metrics such as
                                                weight, body fat percentage and muscle size.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Provides progress assessment methods such as measurement tables and
                                                before-and-after images to track muscle development.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Instructions on how to use tools and applications to track and record
                                                progress.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="course_element.php?course_name=Measuring%20Progress%20and%20Tracking%20Body%20Index" class="border-btn border-btn2">Start</a>
                                    <br><br><br>
                                    <span style="display: flex; justify-content: center; align-items: center;">
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">body-building</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">60-day</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">55-excercise</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course end -->
                    <!-- Course begin -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30">
                            <div class="properties__card">
                                <div class="about-icon">
                                    <div class="about-icon__img-wrapper">
                                        <img src="assets/img/courses/body_building/b06.png" alt="">
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <span class="month">Tailor your training and nutrition regimen to your specific
                                        muscle building goals
                                    </span><br><br>
                                    <p class="mb-25">$5</p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Consider individual factors such as specific muscle building goals,
                                                current body condition, and fitness level.</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Instructions on how to tailor your workout program and diet to achieve
                                                your specific muscle building goals.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Provides suggestions and methods to overcome difficulties and make
                                                progress in the muscle building process.</p>
                                        </div>
                                    </div>
                                    <a href="course_element.php?course_name=Tailoring%20Your%20Training%20and%20Nutrition%20Regimen%20to%20Your%20Specific%20Muscle%20Building%20Goals" class="border-btn border-btn2">Start</a>
                                    <br><br><br>
                                    <span style="display: flex; justify-content: center; align-items: center;">
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">body-building</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">30-day</button>
                                        <button
                                            style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">24-excercise</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course end -->
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!-- ? services-area -->
        <section class="services-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Location</h3>
                                <p> 20/22/23 Dragon Hill, Nguyen Huu Tho St., Phuoc Kien Ward, Nha Be District.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Phone</h3>
                                <p>(90) 277 278 2566</p>
                                <p>(78) 267 256 2578</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Email</h3>
                                <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=canopyFit@gmail.com"
                                        target="_blank">canopyfit@gmail.com</a></p>
                                <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=canopycarepro@gmail.com"
                                        target="_blank">canopycarepro@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area black-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- Footer Menu -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-footer-caption mb-50 text-center">
                                <!-- logo -->
                                <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- Menu -->
                                <!-- Header Start -->
                                <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay=".4s">
                                    <div class="main-header main-header2">
                                        <div class="menu-wrapper menu-wrapper2">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2 text-center">
                                                <nav>
                                                    <ul>
                                                        <li><a href="personal.php">Personal</a></li>
                                                        <li><a href="courses.php">Courses</a></li>
                                                        <li><a href="about.html">About</a></li>
                                                        <li><a href="contact.php">Contact</a>

                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header End -->
                                <!-- social -->
                                <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s"
                                    data-wow-delay=".8s">
                                    <a href="https://twitter.com/CanopyFit"><i class="fab fa-twitter"></i></a>
                                    <a href="https://short.com.vn/Zg3f"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/canopyfit/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p> Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> | This template belongs
                                    to Colorlib
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>