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
    <link rel="stylesheet" href="assets/css/course_element.css">
    <link rel="stylesheet" href="assets/css/finished_course_button.css">
    <link rel="stylesheet" href="assets/css/personal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



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
                                    <li><a href="contact.php">Contact</a>

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
                                <?php
                                include("connect.php");
                                if (isset($_GET['course_name'])) {
                                    $_SESSION['course_name'] = htmlspecialchars($_GET['course_name']);
                                    // Lưu giá trị vào biến session
                                    echo '<h2>' . $_SESSION['course_name'] . '</h2>';
                                }                            
                                ?>
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
            <?php
                if (isset($_SESSION['course_name'])) {
                    $course_name = $_SESSION['course_name']; // từ session
                }
                $course_name = strtoupper($course_name);

                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id']; // từ session
                }

                if (isset($user_id)) {
                    include("connect.php");
                    
                    $check_progress_sql = " SELECT * 
                                            FROM progress P 
                                            WHERE P.USid = $user_id
                                            AND P.Cid = (
                                                SELECT C.Cid
                                                FROM courses C
                                                WHERE C.Cname LIKE '%$course_name%')";
                    $check_result = mysqli_query($conn, $check_progress_sql);
                    $numRows = mysqli_num_rows($check_result);

                    if ($check_result->num_rows > 0) {
                        $row = $check_result->fetch_assoc();
                        $status = $row['Pstatus']; 
                    }
                    if ($numRows == 0) { // ch co du lieu
                        $course_id_sql = "SELECT Cid
                                            FROM courses
                                            WHERE Cname LIKE '%$course_name%'";
                        $course_id_result = $conn->query($course_id_sql);

                        if ($course_id_result->num_rows > 0) {
                            $row = $course_id_result->fetch_assoc();
                            $course_id = $row['Cid'];                        
                            $insert_progress_sql = "INSERT INTO progress (USid, Cid, Pstatus, Pexercise) VALUES ($user_id, $course_id, 1, 1)";
                            if ($conn->query($insert_progress_sql) === TRUE) {
                                echo '<script>';
                                echo 'setTimeout(function() {';
                                echo '    var notification = document.createElement("div");';
                                echo '    notification.innerHTML = "<div class=\'notification-box\' style=\'text-align: center; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); position: fixed; top: 50%; left: 50%;\'><p>Congratulations! You have successfully enrolled in the course.</p><span class=\'close-button\'>&times;</span></div>";';
                                echo '    document.body.appendChild(notification);';
                                echo '    var closeButton = notification.querySelector(".close-button");';
                                echo '    closeButton.addEventListener("click", function() {';
                                echo '        notification.remove();'; // Xóa thbao khi nhấn nút
                                echo '    });';
                                echo '}, 1000);'; 
                                echo '</script>';
                            } else {
                                echo "Error: " . $insert_progress_sql . "<br>" . $conn->error;
                            }
                        }
                    }
                    if ($numRows != 0 && $status == 'Completed') {
                        echo '<script>';
                        echo 'setTimeout(function() {';
                        echo '    var notification = document.createElement("div");';
                        echo '    notification.innerHTML = "<div class=\'notification-box\' style=\'text-align: center; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); position: fixed; top: 50%; left: 50%;\'><p style=\'font-size: 20px;\'>You have completed this course.</p><button class=\'turn-back-button\' style=\'background-color: #FF4B2B; border-radius: 5px; /* Green */ border: none; color: white; padding: 15px 30px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; cursor: pointer;\'>Turn Back</button><span class=\'close-button\'>&times;</span></div>";';
                        echo '    document.body.appendChild(notification);';
                        echo '    var closeButton = notification.querySelector(".close-button");';
                        echo '    var turnBackButton = notification.querySelector(".turn-back-button");';
                        echo '    closeButton.addEventListener("click", function() {';
                        echo '        notification.remove();'; // Xóa thông báo khi nhấn nút
                        echo '    });';
                        echo '    turnBackButton.addEventListener("click", function() {';
                        echo '        window.location.href = "courses.php";'; // Chuyển hướng người dùng trở lại trang courses.php khi nhấp vào nút "Turn Back"
                        echo '    });';
                        echo '}, 2000);'; 
                        echo '</script>';

                    }
                    else {
                        // Tiếp tục truy vấn dữ liệu về khóa học
                        $sql = "SELECT D.Dinstruct, D.Dtime, D.Dexercise
                        FROM detail_courses D
                        WHERE D.Cid IN (
                            SELECT P.Cid
                            FROM progress P
                            WHERE P.USid = $user_id
                            AND P.Pstatus = 1
                            AND P.Pexercise <= (
                                SELECT C.Cexercise
                                FROM courses C
                                WHERE C.Cid = P.Cid
                                AND C.Cname LIKE '%$course_name%'
                            )
                            AND D.Dexercise = P.Pexercise)";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<div class="wrapper">';
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="wrapper">';
                                echo '<div class="animated-border"></div>';
                                echo '<div class="content" style="color: white; text-align: center;"> Exercise ' . $row['Dexercise'] . '</div>';
                                echo '</div>';
                                echo '<div class="exercise" style="padding-top: 50px; color: white; text-align: center;">';
                                echo '<p class="time" style="font-size: 40px; margin-bottom: 20px; color: white" >Time: ' . $row['Dtime'] . '</p>';
                                echo '<h3 style= "font-size: 40px; margin-bottom: 10px; color: white;">Instruction</h3>';
                                $instructions = explode("\r\n", $row['Dinstruct']);
                                foreach ($instructions as $instruction) {
                                    echo '<div class="exercise" style="margin-bottom: 10px;">' . $instruction . '</div>';
                                }
                                echo '</div>';
                                echo '
                                    <form id="finish-form" action="update.php" method="post">
                                        <button class="primary-button finish-btn" name="finish-btn">FINISH</button>
                                    </form>
                                ';
                            }
                        } else {
                            // Hiển thị thông báo nếu không có bất kỳ khóa học nào
                            echo '<script>';
                            echo 'setTimeout(function() {';
                            echo '    var notification = document.createElement("div");';
                            echo '    notification.innerHTML = "<div class=\'notification-box\'><p>You are not enrolled in any courses. Please click <a href=\'courses.php\'>here</a> to find a course.</p><span class=\'close-button\'>&times;</span></div>";';
                            echo '    document.body.appendChild(notification);';
                            echo '    var closeButton = notification.querySelector(".close-button");';
                            echo '    closeButton.addEventListener("click", function() {';
                            echo '        notification.remove();'; // Xóa thbao khi nhấn nút
                            echo '    });';
                        
                            echo '}, 1000);'; // Hiển thị trong 5 giây
                            echo '</script>';
                        } 
                    }
                } else {
                    echo '<div class="error-msg">';
                    echo 'Progress is not setup.';
                    echo '</div>';
                }
                mysqli_close($conn);
            ?>
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
                                                        <li><a href="contact.php">Contact</a></li>

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