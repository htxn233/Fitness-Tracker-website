<?php
session_start();
include("connect.php");

if (isset($_SESSION['course_name'])) {
    $course_name = $_SESSION['course_name']; // tu session
}
$course_name = strtoupper($course_name);


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; 
}

if(isset($_POST['finish-btn'])){
    // Kiểm tra số bài tập của progress
    $check = "SELECT *
              FROM progress P
              WHERE P.USid = $user_id 
              AND P.Pstatus = 1
              AND P.Pexercise < (
                  SELECT C.Cexercise 
                  FROM courses C 
                  WHERE C.Cid = P.Cid
                  AND C.Cname LIKE '%$course_name%')";
    $check_result = mysqli_query($conn, $check);
    $numRows = mysqli_num_rows($check_result);

    if ($numRows > 0) {
        // Nếu số bài tập của progress nhỏ hơn bài tập tổng trong courses => truy vấn update
        $sql = "UPDATE progress P
                SET P.Pexercise = P.Pexercise + 1
                WHERE P.USid = $user_id 
                AND P.Pstatus = 1
                AND (P.Pexercise) <= (
                    SELECT C.Cexercise 
                    FROM courses C 
                    WHERE C.Cid = P.Cid
                    AND C.Cname LIKE '%$course_name%' -- 1 ng 1 khoa nen van ch thay loi
                )";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: course_element.php");
            exit();
        } else {
            echo "Error.";
        }
    } else {
        $sql = "UPDATE progress P
                SET P.Pstatus = 2 -- Completed
                WHERE P.USid = $user_id 
                AND (P.Pexercise) = (
                    SELECT C.Cexercise 
                    FROM courses C 
                    WHERE C.Cid = P.Cid
                    AND C.Cname LIKE '%$course_name%' -- 1 ng 1 khoa nen van ch thay loi
                )";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: profile.php");
            exit();
        } else {
            echo "Error.";
        }
    }
}
else {
    echo 'Please check the button.';
}

mysqli_close($conn);
?>
