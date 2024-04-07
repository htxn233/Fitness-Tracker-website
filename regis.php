<?php
    include("connect.php");

    if(!isset($_POST['signup-button'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $checkQuery = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $checkQuery);

        if(mysqli_num_rows($result) > 0){
            header("Location: loginform.php?error=email_exists");
            exit();
        } else{
            $insertQuery = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
            if(mysqli_query($conn, $insertQuery)){
                header("Location: loginform.php?message=registered");               
                exit();
            } else{
                $error = mysqli_error($conn);
                echo "Error: " . $error;
            }
        }
    }
?>