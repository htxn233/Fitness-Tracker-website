<?php
include("connect.php");

if(isset($_POST['signup-button'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $checkQuery = "SELECT * FROM users WHERE USemail = '$email'";
    $result = mysqli_query($conn, $checkQuery);

    if(mysqli_num_rows($result) > 0){
        header("Location: loginform.php?error=email_exists");
        exit();
    } else{
        $insertQuery = "INSERT INTO users (USname, USemail, USphone, USpassword) VALUES ('$name', '$email', '$phone', '$password')";
        if(mysqli_query($conn, $insertQuery)){
            // Get the ID of the newly inserted user
            $userId = mysqli_insert_id($conn);

            // Automatically insert data into progress table for the new user
            $insertProgressQuery = "INSERT INTO progress (Pstatus, USid) VALUES ('incomplete', '$userId')";
            mysqli_query($conn, $insertProgressQuery);

            // Automatically insert data into profile table for the new user
            $insertProfileQuery = "INSERT INTO profile (USid, Pstatus) VALUES ('$userId', 'incomplete')";
            mysqli_query($conn, $insertProfileQuery);

            header("Location: loginform.php");
            exit();
        } else{
            $error = mysqli_error($conn);
            echo "Error: " . $error;
        }
    }
}
?>
