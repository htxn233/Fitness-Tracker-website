<?php
session_start();
ob_start();
?>
<?php
// Kết nối đến cơ sở dữ liệu và truy vấn dữ liệu
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // Gán giá trị từ session vào biến $user_id
}

// Kiểm tra xem biến $user_id đã được xác định chưa
if (isset($user_id)) {
    include("connect.php");
    $sql = "SELECT D.Dinstruct, D.Dtime, D.Dexercise
            FROM detail_courses D
            WHERE D.Cid IN (
                SELECT P.Cid
                FROM progress P
                WHERE P.USid = $user_id
                AND P.Pstatus = 1       -- 1 lan 1 khoa hoc => tranh nhieu dong du lieu => chi 1 P.Cid -- 1: In progress / 2: Completed (ENUM)
                AND P.Pexercise < (
                    SELECT C.Cexercise
                    FROM courses C
                    WHERE C.Cid = P.Cid
                )
                AND D.Dexercise = P.Pexercise
            )";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Duyệt qua từng hàng dữ liệu
        echo '<div style="color: red; background-color: black; padding: 10px; margin: 10px;">';
        while ($row = $result->fetch_assoc()) {
            echo '<div style="margin-bottom: 20px;">';
            echo '<h3 style="margin-bottom: 5px;">Instruction</h3> <p style="margin: 0 0 5px 10px;">' . $row['Dtime'] . '</p>';
            echo '<p style="margin-bottom: 5px;">' . $row['Dinstruct'] . '</p>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<div style="color: red; background-color: black; padding: 10px; margin: 10px;">';
        echo 'Exercise not found.';
        echo '</div>';
    }
} else {
    echo '<div style="color: red; background-color: black; padding: 10px; margin: 10px;">';
    echo 'Progress not found.';
    echo '</div>';
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>