<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <link rel="stylesheet" href="assets/css/feedback.css">
    <link rel="stylesheet" href="Asset/ckeditor5_col/styles.css">
    <title>Feedback Management</title>
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
                        <h1>FEEDBACK MANAGEMENT</h1>
                    </div>
                    <div class="admin-content-main-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Received Date</th>
                                    <th>Check Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'connect.php'; // Kết nối đến cơ sở dữ liệu
                                
                                // Kiểm tra đánh dấu đã đọc khi nhấn nút Mark as Read
                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mark_read'])) {
                                    // Lấy Fid của feedback cần đánh dấu đã đọc
                                    if (isset($_POST['mark_read_fid'])) {
                                        $mark_read_fid = $_POST['mark_read_fid'];

                                        // Truy vấn để lấy trạng thái hiện tại của phản hồi
                                        $status_query = "SELECT * FROM feedback WHERE Fid = '$mark_read_fid'";
                                        $status_result = mysqli_query($conn, $status_query);
                                        $row = mysqli_fetch_assoc($status_result);
                                        if ($row) {
                                            $fid = $row['Fid']; // Assuming 'Fid' is the primary key column
                                            $usname = isset($row['Fname']) ? $row['Fname'] : ""; // Adjusted column name
                                            $usemail = isset($row['Femail']) ? $row['Femail'] : ""; // Adjusted column name
                                            $mess = isset($row['mess']) ? $row['mess'] : "";
                                            $status = isset($row['status']) ? $row['status'] : "";
                                            $time = isset($row['Fdate']) ? $row['Fdate'] : ""; // Retrieve Fdate
                                            $checkDate = isset($row['checkDate']) ? $row['checkDate'] : "";

                                            // Chỉ cập nhật trạng thái thành "read" nếu trạng thái hiện tại là "unread"
                                            if ($status === "unread") {
                                                // Thực hiện truy vấn cập nhật trạng thái đã đọc và thời gian kiểm tra trong cơ sở dữ liệu
                                                $mark_read_query = "UPDATE feedback SET status = 'read', checkDate = NOW() WHERE Fid = '$mark_read_fid'";
                                                if (mysqli_query($conn, $mark_read_query)) {
                                                    echo "<script>alert('Feedback marked as read.');</script>";
                                                } else {
                                                    echo "<script>alert('Error marking feedback as read: " . mysqli_error($conn) . "');</script>";
                                                }
                                            }
                                        }
                                    }
                                }

                                // Truy vấn cơ sở dữ liệu để lấy thông tin của tất cả feedback
                                $query = "SELECT * FROM feedback";
                                $result = mysqli_query($conn, $query);

                                if (!$result) {
                                    echo "Error retrieving feedback: " . mysqli_error($conn);
                                }

                                // Hiển thị thông tin trong bảng
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Ensure the correct column names are used
                                    $fid = isset($row['Fid']) ? $row['Fid'] : ""; // Assuming 'Fid' is the primary key column
                                    $usname = isset($row['Fname']) ? $row['Fname'] : ""; // Adjusted column name
                                    $usemail = isset($row['Femail']) ? $row['Femail'] : ""; // Adjusted column name
                                    $mess = isset($row['mess']) ? $row['mess'] : "";
                                    $status = isset($row['status']) ? $row['status'] : "";
                                    $time = isset($row['Fdate']) ? $row['Fdate'] : ""; // Retrieve Fdate
                                    $checkDate = isset($row['checkDate']) ? $row['checkDate'] : "";

                                    // Xác định màu sắc dựa trên trạng thái đã đọc
                                    $row_color = $status === "read" ? 'read' : 'unread';
                                    // Xác định tên lớp CSS tương ứng
                                    $button_class = $status === "read" ? 'read-btn' : '';

                                    echo "<tr class='$row_color'>";
                                    echo "<td>" . $usname . "</td>";
                                    echo "<td>" . $usemail . "</td>";
                                    echo "<td>" . $mess . "</td>";
                                    echo "<td>" . ($status === "read" ? 'Read' : 'Unread') . "</td>";
                                    echo "<td>" . $time . "</td>"; // Hiển thị thời gian
                                    echo "<td>" . $checkDate . "</td>"; // Hiển thị thời gian kiểm tra
                                    echo "<td>
                                    <form method='POST' style='display: inline;'>
                                        <input type='hidden' name='mark_read_fid' value='" . $fid . "'>
                                        <button type='submit' class='$button_class' name='mark_read'>Checked</button>
                                    </form>
                                </td>";
                                    echo "</tr>";
                                }

                                // Đóng kết nối
                                mysqli_close($conn);
                                ?>
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