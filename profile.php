<?php
session_start();


include ("connect.php");

if(isset($_POST['signin-button'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']); //user nhap
    $password = mysqli_real_escape_string($conn, $_POST['password']);
}

$_SESSION['user'] = $email;

if(!isset($_SESSION['user'])) {
    $errorMessage = "You are not logged in.";
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo2.png" alt="">
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
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="loginform.php" class="btn">Login</a>
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
                            <h2>Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <?php if(isset($errorMessage)): ?>
        <h1><?php echo $errorMessage; ?></h1>
        <a href="loginform.php">Login</a>
    <?php else: ?>
        <section class="about-area2 fix pb-padding pt-50 pb-80">
            <div class="support-wrapper align-items-center">
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                    <!-- img -->
                    <div >
                        <img style="border-radius: 100%;" src="assets/img/gallery/profile.jpg" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text">
                            <h2>Emma Williams</h2>
                            <button class="border-btn" style="color: red">Level</button>
                            <button class="border-btn" style="color: red; margin-left: 30%;">Beginner</button>
                            <br>
                            <button class="border-btn mt-4" style="color: red">Courses</button>
                            <button class="border-btn mt-4" style="color: red; margin-left: 38%;">3</button>
                            <br>
                            <button class="border-btn mt-4" style="color: red">BMI</button>
                            <button class="border-btn mt-4" style="color: red; margin-left: 44%;">20</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div>
                <div class="section-tittle text-center mt-50 mb-20 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 style="font-size: 100px;">Finished courses</h2>
                </div>
            </div>
            <div class="support-wrapper align-items-center" >
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                    <!-- img -->
                    <div >
                        <img style="margin-left: 10%; height: 400px; width: 400px;" src="assets/img/gallery/profile.jpg" alt="">
                    </div>
                </div>
                <div class="left-content2" style="border: 1px solid lightgrey;">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text" >
                            <h2 style="color: lightcoral; text-align: center;">Course Name</h2>
                            <h3 style="color: white;;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Finished 56 exercises in 5 weeks!</h3>
                            <h3 style="color: white;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Gained BMI 20!</h3>
                            <h3 style="color: white;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Achieved goal in the shortest time!</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="support-wrapper align-items-center">
                <div class="left-content2" style="margin-left: 12%; border: 1px solid lightgrey;">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text" >
                            <h2 style="color: lightcoral; text-align: center;">Course Name</h2>
                            <h3 style="color: white;;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Finished 56 exercises in 5 weeks!</h3>
                            <h3 style="color: white;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Gained BMI 20!</h3>
                            <h3 style="color: white;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Achieved goal in the shortest time!</h3>
                        </div>
                    </div>
                </div>
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                    <!-- img -->
                    <div >
                        <img style="margin-left: 10%; height: 400px; width: 400px;" src="assets/img/gallery/profile.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="support-wrapper align-items-center" >
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                    <!-- img -->
                    <div >
                        <img style="margin-left: 10%; height: 400px; width: 400px;" src="assets/img/gallery/profile.jpg" alt="">
                    </div>
                </div>
                <div class="left-content2" style="border: 1px solid lightgrey;">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text" >
                            <h2 style="color: lightcoral; text-align: center;">Course Name</h2>
                            <h3 style="color: white;;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Finished 56 exercises in 5 weeks!</h3>
                            <h3 style="color: white;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Gained BMI 20!</h3>
                            <h3 style="color: white;"><img class="mr-3 mt-3 mb-3" src="assets/img/icon/check.svg" alt="">Achieved goal in the shortest time!</h3>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <hr>
            <div class="support-wrapper align-items-center ml-40" >
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text" >
                            <h2 style="color: white;">Edit profile</h2>
                            <!-- Edit email -->
                            <p class="mb-1 mt-10" style="margin-left: 6px;">Email</p>
                            <input type="email" placeholder="emma****@gmail.com" style="background-color: black; border: 1px solid red; border-radius: 30px; width: 50%; height: 40px; color: white; font-size: 15px; padding-left: 10px;" size="5">
                            <button style="border: 1px solid red; background-color: black; height: 30px; width: 75px; border-radius: 30px; margin-left: 10px; margin-bottom: 10px; font-size: 15px;">Edit</button>
                            <button style="border: 1px solid red; background-color: black; height: 30px; width: 75px; border-radius: 30px; margin-left: 10px; margin-bottom: 10px; font-size: 15px;">Save</button>
                            <!-- Edit username -->
                            <p class="mb-1 mt-10" style="margin-left: 6px;">Username</p>
                            <input type="email" placeholder="Emma Williams" style="background-color: black; border: 1px solid red; border-radius: 30px; width: 50%; height: 40px; color: white; font-size: 15px; padding-left: 10px;" size="5">
                            <button style="border: 1px solid red; background-color: black; height: 30px; width: 75px; border-radius: 30px; margin-left: 10px; margin-bottom: 10px; font-size: 15px;">Edit</button>
                            <button style="border: 1px solid red; background-color: black; height: 30px; width: 75px; border-radius: 30px; margin-left: 10px; margin-bottom: 10px; font-size: 15px;">Save</button>
                            <!-- Edit password -->
                            <p class="mb-1 mt-10" style="margin-left: 6px;">Password</p>
                            <input type="password" placeholder="**********" style="background-color: black; border: 1px solid red; border-radius: 30px; width: 50%; height: 40px; color: white; font-size: 15px; padding-left: 10px;" size="5">
                            <button style="border: 1px solid red; background-color: black; height: 30px; width: 75px; border-radius: 30px; margin-left: 10px; margin-bottom: 10px; font-size: 15px;">Edit</button>
                            <button style="border: 1px solid red; background-color: black; height: 30px; width: 75px; border-radius: 30px; margin-left: 10px; margin-bottom: 10px; font-size: 15px;">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile Area End -->
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
                                <p>You'll look at graphs and charts in Task One, how to approach </p>
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
                                <p>  (78) 267 256 2578</p>
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
    <?php endif; ?>
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
                            <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <div class="main-header main-header2">
                                    <div class="menu-wrapper menu-wrapper2">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2 text-center">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="courses.html">Courses</a></li>
                                                    <li><a href="about.html">About</a></li>
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

</body>
</html>