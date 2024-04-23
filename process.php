<?php
session_start(); // Khởi động phiên làm việc
include('connect.php');

// Kiểm tra xem nút "send-fb" hoặc "send" đã được nhấn hay chưa
if(isset($_POST['send-fb'])) {
    // Lấy thông tin từ phiên làm việc
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $message = $_POST['message'];
    $date = date("Y-m-d H:i:s"); // Lấy thời gian hiện tại
} elseif(isset($_POST['send'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date = date("Y-m-d H:i:s");
} else {
    // Xử lý nếu không có nút nào được nhấn
    echo "Không có dữ liệu được gửi đi.";
    exit(); // Kết thúc mã PHP để ngăn mã phía dưới được thực thi
}

// Thực hiện truy vấn SQL để lưu thông tin vào bảng "feedback" và cập nhật thời gian
$sql = "INSERT INTO feedback (Fname, Femail, mess, Fdate) VALUES ('$username', '$email', '$message', '$date')";

if ($conn->query($sql) === TRUE) {
    header("location: contact.php");
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();

?>
