<?php
    session_start();
    include("connect.php");
    // Handle course selection
    if (isset($_GET['course_name'])) {
        echo htmlspecialchars($_GET['course_name']);    }
    else {
        echo 'Haaaaaaaaaaaaaaaaaaaa';
    }
?>