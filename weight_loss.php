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
                                        <ul class="submenu">
                                            <li><a href="fittube.html">FitTube</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="index.html" class="btn">Sign out</a>
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
                        <h2>weight loss</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="about-icon">
                                <div class="about-icon__img-wrapper">
                                    <img src="assets/img/courses/weight_loss/w01.png" alt="">
                                </div>
                            </div>
                            <div class="properties__caption">
                                <span class="month">Basics of weight loss and nutrition</span><br><br>
                                <p class="mb-25">$12</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Introduction to the weight loss process and the benefits of maintaining a healthy weight. </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provides knowledge about basic nutritional principles for weight loss.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Instructions on how to measure body indexes, such as BMI (Body Mass Index) and body fat index.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Introduction to tools and applications that help track calories and weight loss progress.
                                        </p>
                                    </div>
                                </div>
                                <a href="course_element.php?course_name=Basics%20of%20weight%20loss%20and%20nutrition" class="border-btn border-btn2">Start</a>
                                <br><br><br>
                                <span style="display: flex; justify-content: center; align-items: center;">
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">weight-loss</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">21-day</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">20-excercise</button>
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
                                    <img src="assets/img/courses/weight_loss/w02.png" alt="">
                                </div>
                            </div>
                            <div class="properties__caption">
                                <span class="month">Cardio workouts for effective weight loss </span><br><br>
                                <p class="mb-25">$3</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Introducing the benefits of cardio workouts during weight loss.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Offers a variety of popular cardio exercises such as running, cycling, swimming and jumping rope.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Instructions on how to plan and execute effective cardio sessions.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provide suggestions on the duration and intensity level of cardio sessions corresponding to the student's weight loss goals.
                                        </p>
                                    </div>
                                </div>
                                <a href="course_element.php?course_name=Cardio%20workouts%20for%20effective%20weight%20loss" class="border-btn border-btn2">Start</a>
                                <br><br><br>
                                <span style="display: flex; justify-content: center; align-items: center;">
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">weight-loss</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">21-day</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">25-excercise</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course end -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="properties__caption">
                                <div class="about-icon">
                                    <div class="about-icon__img-wrapper">
                                        <img src="assets/img/courses/weight_loss/w03.png" alt="">
                                    </div>
                                </div>
                                <span class="month">Yoga and Pilates for weight loss</span><br><br>
                                <p class="mb-25">$8</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Introduction to yoga and Pilates and their impact on weight loss.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Offers a variety of yoga and Pilates moves focused on burning calories, toning muscles, and increasing flexibility.</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Instructions on how to perform correct technique and breathing in yoga and Pilates movements.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Recommend a reasonable exercise schedule including yoga and Pilates to help lose weight and improve health.</p>
                                    </div>
                                </div>
                                <a href="course_element.php?course_name=Yoga%20and%20Pilates%20for%20weight%20loss" class="border-btn border-btn2">Start</a>
                                <br><br><br>
                                <span style="display: flex; justify-content: center; align-items: center;">
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">weight-loss</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">30-day</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">25-excercise</button>
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
                                    <img src="assets/img/courses/weight_loss/w04.png" alt="">
                                </div>
                            </div>
                            <div class="properties__caption">
                                <span class="month">Meal planning and daily calorie tracking
                                </span><br><br>
                                <p class="mb-25">$9</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Instructions on how to plan daily meals to meet nutritional needs and lose weight.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provides information about essential food groups and how to balance them in the diet.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Recommend tools and apps to help track daily calories and nutritional quality.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provides tips and strategies to overcome difficulties and maintain a healthy diet during weight loss.
                                        </p>
                                    </div>
                                </div>
                                <a href="course_element.php?course_name=Meal%20planning%20and%20daily%20calorie%20tracking" class="border-btn border-btn2">Start</a>
                                <br><br><br>
                                <span style="display: flex; justify-content: center; align-items: center;">
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">weight-loss</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">30-day</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">24-excercise</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course end -->
                <!-- Course begin -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="about-icon">
                                <div class="about-icon__img-wrapper">
                                    <img src="assets/img/courses/weight_loss/w05.png" alt="">
                                </div>
                            </div>
                            <div class="properties__caption">
                                <span class="month">Weight management and measuring progress</span><br><br>
                                <p class="mb-25">$5</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Instructions on how to manage weight and track weight loss progress.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provides progressive measurement methods such as weight measurement, waist measurement and body size measurement.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>An introduction to what it means to track progress and how to deal with unexpected fluctuations.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provides tips and strategies to stay motivated and achieve weight loss goals effectively.</p>
                                    </div>
                                </div>
                                <a href="course_element.php?course_name=Weight%20management%20and%20measuring%20progress" class="border-btn border-btn2">Start</a>
                                <br><br><br>
                                <span style="display: flex; justify-content: center; align-items: center;">
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">weight-loss</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">60-day</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">50-excercise</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course end -->
                <!-- Course begin -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="about-icon">
                                <div class="about-icon__img-wrapper">
                                    <img src="assets/img/courses/weight_loss/w06.png" alt="">
                                </div>
                            </div>
                            <div class="properties__caption">
                                <span class="month">Daily meal menu and recipes for weight loss dishes
                                </span><br><br>
                                <p class="mb-25">$7</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provide daily menu including main meals and snacks.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Recommend recipes for weight loss dishes that are delicious and easy to make.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Instructions on how to get creative and vary your menu to avoid boredom and maintain motivation.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Provides tips and strategies to overcome difficulties and maintain a healthy diet during weight loss.
                                        </p>
                                    </div>
                                </div>
                                <a href="course_element.php?course_name=Daily%20meal%20menu%20and%20recipes%20for%20weight%20loss%20dishes" class="border-btn border-btn2">Start</a>
                                <br><br><br>
                                <span style="display: flex; justify-content: center; align-items: center;">
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-right: 5px; padding: 5px 10px;">weight-loss</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; margin-right: 5px; padding: 5px 10px;">60-day</button>
                                    <button style="border: 1px solid lightgray; background-color: black; color: red; font-size: 17px; margin-left: 10px; padding: 5px 10px;">54-excercise</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course end -->
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
                            <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=canopyFit@gmail.com" target="_blank">canopyfit@gmail.com</a></p>
                            <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=canopycarepro@gmail.com" target="_blank">canopycarepro@gmail.com</a></p>
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
                            <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Menu -->
                            <!-- Header Start -->
                            <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <div class="main-header main-header2">
                                    <div class="menu-wrapper menu-wrapper2">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2 text-center">
                                            <nav>
                                                <ul>
                                                    <li><a href="personal.php">Personal</a></li>
                                                    <li><a href="courses.php">Courses</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                    
                                                </ul>
                                            </nav>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <!-- Header End -->
                            <!-- social -->
                            <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
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
                            <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> | This template belongs to Colorlib</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Footer End-->
</footer>
  <!-- Scroll Up -->
<div id="back-top" >
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
<script src="./assets/js/courses2.js"></script>


</body>
</html>