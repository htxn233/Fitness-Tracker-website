<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/edit_profile.css">
    <link rel="stylesheet" href="Asset/ckeditor5_col/styles.css">

    <title>Edit User Profile</title>
</head>

<body>
    <section class="admin">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <img src="assets/img/logo/logo2.png">
                </div>
                <div class="admin-sidebar-content">
                    <ul>
                        <li><a href=""><i class="ri-dashboard-line"></i>Dashboard<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="list.php"><i class="ri-arrow-right-s-fill"></i>User List</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i>Manage Courses<i
                                    class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="add_courses.php"><i class="ri-arrow-right-s-fill"></i>Add new
                                            course</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i>Manage User<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="edit_profile.php"><i class="ri-arrow-right-s-fill"></i>Edit User
                                            Profile</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin-content">
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h1>EDIT USER PROFILE</h1>
                    </div>
                    <div class="admin-content-main-content">
                        <div class="admin-content-main-content-product-add">
                            <div class="admin-content-main-content-left">
                                <form method="post">
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="phone" placeholder="Change phone numbers">
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="email" placeholder="Change email">
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="password" placeholder="Change password">
                                    </div>
                                    <button type="submit" class="main-btn" name="save">Update</button>
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
                                        include 'connect.php'; // Kết nối đến cơ sở dữ liệu
                                    
                                        // Lấy dữ liệu từ form
                                        $username = $_POST['username'];
                                        $phone = $_POST['phone'];
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];

                                        // Tạo truy vấn SQL để cập nhật dữ liệu
                                        $query = "UPDATE users SET USphone='$phone', USemail='$email', USpassword='$password' WHERE LOWER(USname) = LOWER('$username')";

                                        // Thực thi truy vấn
                                        if (mysqli_query($conn, $query)) {
                                            echo "";
                                        } else {
                                            echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
                                        }

                                        // Đóng kết nối
                                        mysqli_close($conn);
                                    }
                                    ?>
                                </form>
                            </div>
                            <div class="admin-content-main-content-right-image">
                                <img src="assets/img/logo/logo3.png" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/ckeditor5_col/ckeditor.js"></script>
    <script src="assets/ckeditor5_col/script.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>