<?php
    include ("connect.php");

    // Kiểm tra kết nối đến cơ sở dữ liệu
    if(!isset($_POST['signin-button'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
   
    // Kiểm tra thông tin đăng nhập
        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $numRows = mysqli_num_rows($result);

        if ($email == 'admin@gmail.com' && $password == 'admin') {
            // Đăng nhập thành công với vai trò admin
            header("Location: admin.html");
            exit();
        } elseif ($numRows == 1) {
            // Đăng nhập thành công với vai trò người dùng
            header("Location: index.html");
            exit();
        } else {
            // Thất bại trong việc đăng nhập
            header("Location: loginform.php?error=invalid");
            exit();
        }
    }
?>