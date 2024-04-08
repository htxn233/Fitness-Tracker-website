<?php
    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli("localhost", "username", "password", "courses");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Truy vấn dữ liệu từ cơ sở dữ liệu
    $sql = "SELECT * FROM courses WHERE courses = 'Weight loss'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Duyệt qua mỗi hàng dữ liệu và hiển thị thông tin của từng khóa học
        while($row = $result->fetch_assoc()) {
            ?>
            <!-- Hiển thị thông tin khóa học trong mã HTML -->
            <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <div class="features-caption">
                    <h3><?php echo $row['course_name']; ?></h3>
                    <p><?php echo $row['course_description']; ?></p>
                </div>
            </div>
            <div class="progress mb-40">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $row['progress']; ?>%;" aria-valuenow="<?php echo $row['progress']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <?php
        }
    } else {
        echo "0 results";
    }

    // Đóng kết nối với cơ sở dữ liệu
    $conn->close();
?>
