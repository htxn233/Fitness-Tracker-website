<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="Asset/ckeditor5_col/styles.css">
    <style>
        /* CSS cho bảng */
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        /* CSS cho nút Change */
        .change-btn {
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            /* Màu xanh lá cây */
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-right: 5px;
        }

        .change-btn:hover {
            background-color: #218838;
            /* Màu xanh lá cây nhạt */
        }

        /* CSS cho nút Delete */
        .delete-btn {
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            background-color: #dc3545;
            /* Màu đỏ */
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-right: 5px;
        }

        .delete-btn:hover {
            background-color: #c82333;
            /* Màu đỏ nhạt */
        }
    </style>
    <title>Courses List</title>
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
                                    <li><a href="feedback.php"><i class="ri-arrow-right-s-fill"></i>Feedback Management</a></li>
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
                        <h1>COURSES LIST</h1>
                    </div>
                    <div class="admin-content-main-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Course name</th>
                                    <th>Numbers of exercises</th>
                                    <th>Exercise duration</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'connect.php'; // Kết nối đến cơ sở dữ liệu
                                
                                // Kiểm tra xóa khóa học khi nhấn nút Delete
                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
                                    // Lấy tên khóa học cần xóa
                                    $delete_cname = $_POST['delete_cname'];

                                    // Thực hiện truy vấn xóa khóa học từ cơ sở dữ liệu
                                    $delete_query = "DELETE FROM courses WHERE Cname = '$delete_cname'";
                                    if (mysqli_query($conn, $delete_query)) {
                                        echo "<script>alert('Course deleted successfully.');</script>";
                                    } else {
                                        echo "<script>alert('Error deleting course: " . mysqli_error($conn) . "');</script>";
                                    }
                                }

                                // Truy vấn cơ sở dữ liệu để lấy thông tin của tất cả khóa học
                                $query = "SELECT * FROM courses"; // Điều chỉnh truy vấn theo cấu trúc bảng của bạn
                                $result = mysqli_query($conn, $query);

                                // Hiển thị thông tin trong bảng
                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['Cname'] . "</td>";
                                        echo "<td>" . $row['Cexcercise'] . "</td>";
                                        echo "<td>" . $row['Ctime'] . "</td>";
                                        echo "<td>" . $row['Ccate'] . "</td>";
                                        echo "<td>
                                    <a class='change-btn' href='edit_course.php?cname=" . $row['Cname'] . "'>Change</a> |
                                    <form method='post' style='display: inline;'>
                                        <input type='hidden' name='delete_cname' value='" . $row['Cname'] . "'>
                                        <button type='submit' class='delete-btn' name='delete'>Delete</button>
                                    </form>
                                </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Error fetching data: " . mysqli_error($conn);
                                }

                                // Đóng kết nối
                                mysqli_close($conn);
                                ?>

                                <!--  -->
                            </tbody>
                        </table>
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
