<?php
    include ("connect.php");

    if(!isset($_POST['signin-button'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']); //user nhap
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
   
    // Kiểm tra thông tin đăng nhập
        $query = "SELECT * FROM users WHERE USemail = '$email' AND USpassword = '$password'";
        $USemail = "SELECT USemail FROM users Where USemail = '$email' AND USpassword = '$password'"; //cua he thong
        $USpw = "SELECT USpassword FROM users Where USemail = '$email' AND USpassword = '$password'";
        $result = mysqli_query($conn, $query);
        $numRows = mysqli_num_rows($result);

        if ($email == 'admin@gmail.com' && $password == 'admin123') {
            // Đăng nhập thành công với vai trò admin
            header("Location: index.html");
            exit();
        } else if ($numRows == 1) {
            // Đăng nhập thành công với vai trò người dùng
            header("Location: personal.php");
            exit();
        } else {
            // Thất bại trong việc đăng nhập
            header("Location: loginform.php?error=invalid");
            exit();
        }
    }
?>