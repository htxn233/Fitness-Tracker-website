<?php
include(connect.php)

// Xử lý dữ liệu khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $cname = $_POST["cname"];
    $ctime = $_POST["ctime"];
    $cdes = $_POST["cdes"];

    // Thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO courses (Cname, Ctime, Cdes) VALUES ('$cname', '$ctime', '$cdes')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
