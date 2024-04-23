<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/edit_profile.css"> <!-- Chỉnh sửa link CSS -->
    <link rel="stylesheet" href="Asset/ckeditor5_col/styles.css">

    <title>Edit Course</title>
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
                                    <li><a href="edit_profile.php"><i class="ri-arrow-right-s-fill"></i>Edit User
                                            Profile</a></li>
                                    <li><a href="feedback.php"><i class="ri-arrow-right-s-fill"></i>Feedback
                                            Management</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i>Manage Courses<i
                                    class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="courses_list.php"><i class="ri-arrow-right-s-fill"></i>Course List</a>
                                    </li>
                                    <li><a href="add_courses.php"><i class="ri-arrow-right-s-fill"></i>Add new
                                            course</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin-content">
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h1>EDIT COURSE</h1>
                    </div>
                    <div class="admin-content-main-content">
                        <div class="admin-content-main-content-product-add">
                            <div class="admin-content-main-content-left">
                                <form method="post">
                                    <?php
                                    // Lấy tên khóa học từ URL nếu có
                                    $cname = isset($_GET['cname']) ? $_GET['cname'] : '';

                                    // Hiển thị trường nhập với giá trị tên khóa học
                                    echo '<div class="admin-content-main-content-two-input">
                                        <input type="text" name="cname" placeholder="Course Name" value="' . $cname . '">
                                    </div>';
                                    ?>
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="excercise" placeholder="Number of Exercises">
                                        <!-- Thêm trường nhập số bài tập -->
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="time" placeholder="Exercise Duration">
                                        <!-- Thêm trường nhập thời gian bài tập -->
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <select name="cate" style="width:auto;margin-bottom: 8px; ">
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="Weight loss">Weight loss</option>
                                            <option value="Muscle gain">Muscle gain</option>
                                            <option value="Body building">Body building</option>
                                            <option value="Relaxing">Relaxing</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="main-btn" name="save">Update</button>
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
                                        include 'connect.php'; // Kết nối đến cơ sở dữ liệu
                                    
                                        // Lấy dữ liệu từ form
                                        $cname = $_POST['cname'];
                                        $excercise = $_POST['excercise'];
                                        $time = $_POST['time'];
                                        $cate = isset($_POST['cate']) ? $_POST['cate'] : ''; // Check if 'cate' key is set
                                    
                                        switch ($cate) {
                                            case "Weight loss":
                                                $clink = "weight_loss_b.html";
                                                break;
                                            case "Muscle gain":
                                                $clink = "muscle_gain_b.html";
                                                break;
                                            case "Body building":
                                                $clink = "body_building_b.html";
                                                break;
                                            case "Relaxing":
                                                $clink = "relaxing_b.html";
                                                break;
                                            default:
                                                $clink = "";
                                        }

                                        // Tạo truy vấn SQL để cập nhật dữ liệu
                                        $query = "UPDATE courses SET Cexcercise='$excercise', Ctime='$time', Ccate='$cate' WHERE Cname = '$cname'";

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