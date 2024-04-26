<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/add_course.css">
    <link rel="stylesheet" href="Asset/ckeditor5_col/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Add new course</title>
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
                        <H1>ADD NEW COURSE</H1>
                    </div>
                    <div class="admin-content-main-content">
                        <!--  Nội dung nằm ở đây -->
                        <div class="admin-content-main-content-product-add">
                            <div class="admin-content-main-content-left">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="cname" placeholder="Course name">
                                    </div>

                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="cexcercise" placeholder="Number of exercises">
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <input type="text" name="ctime" placeholder="Exercise Duration">
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <select name="ccate" style="width:auto;margin-bottom: 8px; ">
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="Weight loss">Weight loss</option>
                                            <option value="Muscle gain">Muscle gain</option>
                                            <option value="Body building">Body building</option>
                                            <option value="Relaxing">Relaxing</option>
                                        </select>
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <textarea class="editor_content" name="cdes" id="">description</textarea>
                                    </div>
                                    <div class="admin-content-main-content-two-input">
                                        <input type="file" id="file" name="file">
                                    </div>

                                    <br>
                                    <button class="main-btn" type="submit" name="add_course">Add course</button>
                                </form>
                                <?php
                                // Kết nối đến cơ sở dữ liệu
                                include 'connect.php';

                                // Kiểm tra nếu form được gửi đi (nút "Add course" được nhấn)
                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_course'])) {
                                    // Lấy dữ liệu từ form
                                    $cname = strtoupper($_POST['cname']); // Chuyển đổi tên khóa học thành chữ hoa
                                    $cexcercise = $_POST['cexcercise'];
                                    $clink = ''; // Cần chỉnh sửa nếu có trường dữ liệu liên quan
                                    $ccate = isset($_POST['ccate']) ? $_POST['ccate'] : ''; // Kiểm tra xem 'ccate' có tồn tại không
                                    $ctime = $_POST['ctime'];
                                    $cdes = $_POST['cdes'];

                                    // Kiểm tra loại khóa học được chọn và gán link tương ứng
                                    switch ($ccate) {
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

                                    // Upload file hình ảnh
                                    $target_dir = "uploads/";
                                    $target_file = $target_dir . basename($_FILES["file"]["name"]);

                                    // Debugging: Print out the target file path
                                    echo "Target File: " . $target_file . "<br>";

                                    $uploadOk = 1;
                                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                    // Debugging: Print out the image file type
                                    echo "Image File Type: " . $imageFileType . "<br>";

                                    // Kiểm tra nếu file hình ảnh đã tồn tại
                                    if (file_exists($target_file)) {
                                        echo "Sorry, file already exists.";
                                        $uploadOk = 0;
                                    }

                                    // Kiểm tra kích thước file
                                    if ($_FILES["file"]["size"] > 500000) {
                                        echo "Sorry, your file is too large.";
                                        $uploadOk = 0;
                                    }

                                    // Cho phép các định dạng file cụ thể
                                    if (
                                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                        && $imageFileType != "gif"
                                    ) {
                                        $uploadOk = 0;
                                    }

                                    // Kiểm tra nếu $uploadOk = 0
                                    if ($uploadOk == 0) {
                                        echo "Sorry, your file was not uploaded.";
                                        // Nếu mọi thứ đều ổn, thử tải file lên máy chủ
                                
                                    }
                                    // Câu lệnh INSERT dữ liệu vào cơ sở dữ liệu
                                    $query = "INSERT INTO courses (Cname, Cexcercise, Clink, Ccate, Ctime, Cdes, Cpic) VALUES ('$cname', '$cexcercise', '$clink', '$ccate', '$ctime', '$cdes', '$target_file')";

                                    // Thực thi truy vấn
                                    if (mysqli_query($conn, $query)) {
                                        echo "Course added successfully.";
                                    } else {
                                        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
                                    }

                                    // Đóng kết nối
                                    mysqli_close($conn);
                                }
                                ?>
                            </div>
                            <div class="admin-content-main-content-right-image">
                                <img src="assets/img/logo/logo3.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="assets/ckeditor5_col/ckeditor.js">  </script>
    <script src="assets/ckeditor5_col/script.js">  </script>
    <script src="assets/js/script.js"></script>
</body>

</html>