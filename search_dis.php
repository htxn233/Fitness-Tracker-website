<?php
include("connect.php");

// Check if the search data has been submitted
if(isset($_POST['submit-search'])) {
    // Get the search keyword
    if(isset($_POST['keyword'])) {
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);

        // Convert the search keyword to lowercase
        $keyword = strtolower($keyword);

        // Check if the keyword is empty
        if(empty($keyword)) {
            // Redirect user back to discover.php
            header("Location: discover.php");
            exit(); // Make sure to exit the script after redirection
        }

        // Perform a query to search for articles in the database
        $query = "SELECT * FROM news WHERE LOWER(Ntitle) LIKE '%$keyword%' OR LOWER(Ntype) LIKE '%$keyword%'";

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if any articles match the search keyword
        if(mysqli_num_rows($result) > 0) {
            // Redirect user to the first matching article's link
            $row = mysqli_fetch_assoc($result);
            $articleLink = $row['Nlink'];
            header("Location: $articleLink");
            exit(); // Make sure to exit the script after redirection
        } else {
            header("Location: discover.php?error=invalid");
            exit();
        }
    }
}
?>