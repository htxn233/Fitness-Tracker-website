<?php
session_start();
ob_start();
if (!isset($_SESSION['user_id'])) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: login.php");
    exit(); // Dừng kịch bản để ngăn truy cập tiếp tục vào trang hiện tại
}
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
    <link rel="stylesheet" href="assets/css/profile.css">

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
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="index.html" class="btn">Sign Out</a>
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
        <section class="about-area2 fix pb-padding pt-50 pb-80">
            <div class="support-wrapper align-items-center">
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <!-- img -->
                    <div>
                        <img style="border-radius: 100%;" src="assets/img/gallery/profile.jpg" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text">
                            <div class="front-text">
                                <?php

                                // Kiểm tra xem biến $_SESSION['user_id'] đã được khởi tạo chưa
                                if (isset($_SESSION['user_id'])) {
                                    $user_id = $_SESSION['user_id']; // Gán giá trị từ session vào biến $user_id
                                }

                                // Kiểm tra xem biến $user_id đã được xác định chưa
                                if (isset($user_id)) {
                                    include ("connect.php");

                                    // Truy vấn dữ liệu từ bảng profile và users trong cơ sở dữ liệu cho USid cụ thể
                                    $sql = $sql = "SELECT USname, USemail, USphone from users WHERE USid = $user_id";
<<<<<<< HEAD


=======
>>>>>>> 19760152e37d5e19dd68c30d497c8dd36dbcd75c
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // Duyệt qua từng hàng dữ liệu
                                        while ($row = $result->fetch_assoc()) {
                                            // Hiển thị thông tin từ mỗi hàng dữ liệu
                                            echo "<h2>" . $row["USname"] . "</h2>";
                                            echo "<button class='border-btn mt-4' style='color: red'>Email: " . $row["USemail"] . "</button>";
                                            echo "<br>";
                                            echo "<button class='border-btn mt-4' style='color: red'>Phone: " . $row["USphone"] . "</button>";
                                            echo "<br>";
                                        }
                                    }

                                    $conn->close();
                                } else {
                                    echo "User ID is not set."; // Xuất thông báo nếu user_id không được xác định
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="section-tittle text-center mt-50 mb-20 wow fadeInUp finished-course-title" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>Finished courses</h2>
                </div>
                <div class="support-wrapper align-items-center">
                    <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <!-- img -->
                        <div>
                            <img style="width: 50%; border-radius: 100%; margin-left: 120px;" src="assets/img/logo/logo2.png" alt="">
                        </div>
                    </div>
                    <div class="left-content3" style="border: 1px solid lightgrey;">
                        <!-- section tittle -->
                        <div class="section-tittle mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <?php
<<<<<<< HEAD
                            // Kiểm tra xem biến $_SESSION['user_id'] đã được khởi tạo chưa
=======
>>>>>>> 19760152e37d5e19dd68c30d497c8dd36dbcd75c
                            if (isset($_SESSION['user_id'])) {
                                $user_id = $_SESSION['user_id']; // Gán giá trị từ session vào biến $user_id
                            }

                            // Kiểm tra xem biến $user_id đã được xác định chưa
                            if (isset($user_id)) {
                                include ("connect.php");
<<<<<<< HEAD

                                $sql = "SELECT Cname
                            FROM courses
                            WHERE Cid IN (
                                SELECT Cid
                                FROM progress
                                WHERE USid = $user_id
                                AND Pstatus = 'Completed'
                            )";
=======
                                $sql = "SELECT Cname
                                FROM courses
                                WHERE Cid IN (
                                    SELECT Cid
                                    FROM progress
                                    WHERE USid = $user_id
                                    AND Pstatus = 2
                                )";
>>>>>>> 19760152e37d5e19dd68c30d497c8dd36dbcd75c

                                $result = $conn->query($sql);

                                // Kiểm tra lỗi trong quá trình truy vấn
                                if (!$result) {
                                    die("Query failed: " . $conn->error);
                                }

                                // Kiểm tra xem có dữ liệu trả về hay không
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "</div>";
                                        echo "<div class='finished-course'>";
                                        echo "<div class='front-text'>";
<<<<<<< HEAD
                                        echo "<h2 style='color: lightcoral; text-align: left;'>" . $row["Cname"] . "</h2>";

=======
                                        echo "<div class='features-icon'><h2><img src='assets/img/icon/check.svg'>" . $row["Cname"] . "</h2></div>";
                                        echo "</div>";
>>>>>>> 19760152e37d5e19dd68c30d497c8dd36dbcd75c
                                    }
                                } else {
                                    echo "No completed courses found for this user.";
                                }
                            }

                            // Đóng kết nối đến cơ sở dữ liệu
                            $conn->close();
                            ?>

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
                                <p> (78) 267 256 2578</p>
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
                                                        <li><a href="personal.php">Peronal</a></li>
                                                        <li><a href="courses.php">Courses</a></li>
                                                        <li><a href="about.html">About</a></li>
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