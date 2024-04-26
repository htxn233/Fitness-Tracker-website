<?php
include("connect.php");

if(isset($_POST['submit'])) {
    $keyword = mysqli_real_escape_string($conn, $_POST['search']); // lay tu input/name
    if(empty($keyword)) {
        header("Location: courses.php");
        exit(); 
    }
    $keyword = strtolower($keyword);

    //sql
    $query = "SELECT * FROM courses WHERE Cname LIKE '%$keyword%' OR Ccate LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $courseLink = $row['Clink'];
        header("Location: $courseLink");
        exit();
    } else {
        header("Location: courses.php?error=invalid");
        exit();
    }
}
?>
