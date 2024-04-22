<?php
include("connect.php");

// Check if the search data has been submitted
if(isset($_POST['submit'])) {
    // Get the search keyword
    if(isset($_POST['keyword'])) {
        // Sanitize and escape the search keyword to prevent SQL injection
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);

        // Convert the search keyword to lowercase
        $keyword = strtolower($keyword);

        // Check if the keyword is empty
        if(empty($keyword)) {
            // Redirect user back to courses_b.php
            header("Location: courses.php");
            exit(); // Make sure to exit the script after redirection
        }

        // Perform a query to search for courses in the database
        $query = "SELECT * FROM courses WHERE LOWER(Cname) LIKE '%$keyword%' OR LOWER(Ccate) LIKE '%$keyword%'";

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if any courses match the search keyword
        if(mysqli_num_rows($result) > 0) {
            // Redirect user to the first matching course's link
            $row = mysqli_fetch_assoc($result);
            $courseLink = $row['Clink'];
            header("Location: $courseLink");
            exit(); // Make sure to exit the script after redirection
        } else {
            header("Location: courses.php?error=invalid");
            exit();
        }
    }
}
?>
