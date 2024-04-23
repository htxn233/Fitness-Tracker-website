<?php
include 'connect.php'; // Include database connection

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['done'])) {
    // Check if user_id is set in the session
    if (isset($_SESSION['user_id'])) {
        // Retrieve user_id from the session
        $userId = $_SESSION['user_id'];
        // Prepare the SQL query to update the Pstatus in the progress table
        $query = "UPDATE progress SET Pstatus = 'complete' WHERE USid = ?";
        // Create a prepared statement
        $stmt = mysqli_prepare($conn, $query);
        // Check for errors in prepared statement creation
        if ($stmt === false) {
            echo "ERROR: Could not prepare statement. " . mysqli_error($conn);
            exit;
        }
        // Bind user_id parameter to the prepared statement
        mysqli_stmt_bind_param($stmt, "s", $userId);
        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Chỉ chuyển hướng người dùng và không xuất ra bất kỳ đầu ra nào
            header("location: personal.php");
            exit(); // Kết thúc kịch bản sau khi chuyển hướng
        } else {
            echo "ERROR: Could not execute $query. " . mysqli_error($conn); // Display error message
        }
        // Close the prepared statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Session variable user_id is not set."; // Display error if user_id is not set in the session
    }
    // Close the database connection
    mysqli_close($conn);
}
?>