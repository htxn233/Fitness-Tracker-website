<?php
    include("connect.php");

    // Check if the registration form is submitted
    if(isset($_POST['signup-button'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the email already exists in the database
        $checkquery = "SELECT * FROM login WHERE email = '$email'";
        $result = mysqli_query($conn, $checkquery);

        if(mysqli_num_rows($result) > 0){
            // Email already exists, display error message
            header("Location: loginform.php?error=email_exists");
            exit();
        } else{
            // Email does not exist, proceed with registration
            $insertquery = "INSERT INTO login (name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($conn, $insertquery);

            // Registration successful, redirect to home page
            header("Location: index.html");
            exit();
        }
    }
?>