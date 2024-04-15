<?php
session_start();
ob_start();
include ("connect.php");

// Xử lý yêu cầu khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Đã sửa thành "REQUEST_METHOD" và so sánh với "POST"
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $sql = "SELECT * FROM courses WHERE Ccate = '$category'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["Cname"] . " - Time: " . $row["Ctime"] . " - Description: " . $row["Cdes"] . " - Category: " . $row["Ccate"] . "<br>";
        }
    } else {
        echo "This category is developing. Please select another category to find a course.";
    }
}
$conn->close();
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
        <link rel="stylesheet" href="assets/css/searchbar.css">
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
                <div class="container" style="position: relative;">
                    <div class="row">
                        <div class="wrapper">
                            <div class="search_box">
                                <div class="dropdown">
                                    <div class="default_option">Select</div>
                                    <ul>
                                        <li><button type="submit" name="category" value="Weight loss">Weight
                                                loss</button>
                                        </li>
                                        <li><button type="submit" name="category" value="Body building">Body
                                                building</button></li>
                                        <li><button type="submit" name="category" value="Muscle gain">Muscle
                                                gain</button>
                                        </li>
                                        <li><button type="submit" name="category" value="Relaxing">Relaxing</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="search_field">
                                    <input type="text" class="input2" placeholder="Search">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include ("connect.php");

                    // Chuẩn bị truy vấn với tham số
                    $sql = "SELECT * FROM courses WHERE Ccate = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $category);
                    // Thiết lập giá trị tham số và thực thi truy vấn
                    $category = "Weight loss";
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Kiểm tra kết quả và hiển thị dữ liệu
                    if ($result->num_rows > 0) {
                        // Duyệt qua các hàng kết quả
                        while ($row = $result->fetch_assoc()) {
                            echo "Course ID: " . $row["Cid"] . " - Course Name: " . $row["Cname"] . "<br>";
                        }
                    } else {
                        echo "No result";
                    }

                    // Đóng kết nối
                    $stmt->close();
                    $conn->close();
                    ?>
                </div>
                </div>
                </div>
                <!-- Hero End -->
                <!--? Team -->
                <section class="team-area fix section-padding30">
                    <div class="container">
                        <div class="row">
                            <div class="wrapper">
                                <div class="search_box">
                                    <div class="dropdown">
                                        <div class="default_option">Select</div>
                                        <ul>
                                            <li><button type="submit" name="catelogy" value="Weight loss">Weight
                                                    loss</button></li>
                                            <li><button type="submit" name="catelogy" value="Body building">Body
                                                    building</button></li>
                                            <li><button type="submit" name="catelogy" value="Muscle gain">Muscle
                                                    gain</button></li>
                                            <li><button type="submit" name="catelogy" value="Relaxing">Relaxing</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="search_field">
                                        <input type="text" class="input2" placeholder="Search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services End -->
                <!-- Traning categories Start -->
                <section class="traning-categories black-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section-tittle text-center mb-55">
                                    <h2>Your courses</h2>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Services End -->
                <!-- Traning categories Start -->
                <section class="traning-categories black-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section-tittle text-center mb-55">
                                    <h2>Your courses</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="single-topic text-center mb-30">
                                    <div class="topic-img">
                                        <img src="assets/img/gallery/gallery5.png" alt="">
                                        <div class="topic-content-box">
                                            <div class="topic-content">
                                                <h3>Weight Loss</h3>
                                                <p>Shed pounds, burn fat, and adopt healthy habits with our targeted
                                                    program.
                                                    Achieve your weight loss goals through a combination of balanced
                                                    diets and
                                                    effective exercises.</p>
                                                <a href="weight_loss.html" class="btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="single-topic text-center mb-30">
                                    <div class="topic-img">
                                        <img src="assets/img/gallery/gallery4.png" alt="">
                                        <div class="topic-content-box">
                                            <div class="topic-content">
                                                <h3>Muscle gain</h3>
                                                <p>Build strength and size with our tailored workouts and proper
                                                    nutrition
                                                    guidance. Transform your physique, increase muscle mass, and enhance
                                                    definition.</p>
                                                <a href="muscle_gain.html" class="btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="single-topic text-center mb-30">
                                    <div class="topic-img">
                                        <img src="assets/img/gallery/gallery6.png" alt="">
                                        <div class="topic-content-box">
                                            <div class="topic-content">
                                                <h3>Body building</h3>
                                                <p>Sculpt your body to perfection with our intensive program. Develop
                                                    symmetrical muscles, achieve low body fat levels, and maximize
                                                    muscle
                                                    definition.</p>
                                                <a href="body_building.html" class="btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="single-topic text-center mb-30">
                                    <div class="topic-img">
                                        <img src="assets/img/gallery/relaxing.jpg" alt="">
                                        <div class="topic-content-box">
                                            <div class="topic-content">
                                                <h3>Relaxing</h3>
                                                <p>Unwind and reduce stress with our calming program. Improve
                                                    flexibility, find
                                                    inner peace, and restore balance in body and mind.</p>
                                                <a href="relaxing.html" class="btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Traning categories End-->
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
                                        <p> 20/22/23 Dragon Hill, Nguyen Huu Tho St., Phuoc Kien Ward, Nha Be District.
                                        </p>
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
                                        <a href="personal.php"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                        <a href="https://www.instagram.com/canopyfit/"><i
                                                class="fab fa-instagram"></i></a>
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
                                        <script>document.write(new Date().getFullYear());</script> | This template
                                        belongs
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

        <!-- Search and Select bar -->
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="./assets/js/ssbar.js"></script>


    </body>

    </html>