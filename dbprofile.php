<?php
// Kết nối đến cơ sở dữ liệu
include ("connect.php");

// Truy vấn dữ liệu từ bảng profile trong cơ sở dữ liệu
$sql = "SELECT Pid, Pname, level, Pcourses, BMI FROM profile";
$result = $conn->query($sql);

// Kiểm tra xem có dữ liệu trả về hay không
if ($result->num_rows > 0) {
    // Duyệt qua từng hàng dữ liệu
    while($row = $result->fetch_assoc()) {
        // Hiển thị thông tin từ mỗi hàng dữ liệu
        echo "<div>";
        echo "<p>Profile ID: " . $row["Pid"]. "</p>";
        echo "<p>Name: " . $row["Pname"]. "</p>";
        echo "<p>Level: " . $row["level"]. "</p>";
        echo "<p>Courses: " . $row["Pcourses"]. "</p>";
        echo "<p>BMI: " . $row["BMI"]. "</p>";
        echo "</div>";
    }
} else {
    echo "0 results"; // Hiển thị thông báo nếu không có dữ liệu
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
