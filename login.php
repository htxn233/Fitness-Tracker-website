<?php
    session_start();
    include("connect.php");

    if(isset($_POST['signin-button'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']); //user nhap
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        // Kiểm tra thông tin đăng nhập
        $query = "SELECT * FROM users WHERE USemail = '$email' AND USpassword = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Lưu USid của người dùng vào phiên
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['USid'];
            //Ktra khoi tao
            // if (isset($_SESSION['user_id'])) {
            //     // $_SESSION['user_id'] đã được gán giá trị
            //     // Tiếp tục xử lý nội dung trang
            // } else {
            //     // $_SESSION['user_id'] chưa được gán giá trị
            //     // Hiển thị thông báo hoặc chuyển hướng người dùng đến trang khác
            // }

            if ($email == 'admin@gmail.com' && $password == 'admin123') {
                // Đăng nhập thành công với vai trò admin
                header("Location: admin.php");
                exit();
            } else {
                // Đăng nhập thành công với vai trò người dùng
                header("Location: personal.php");
                exit();
            }
        } else {
            // Thất bại trong việc đăng nhập
            header("Location: loginform.php?error=invalid");
            exit();
        }
    }
?>