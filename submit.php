<?php
include 'connection.php'; // Ensure this connects successfully to your database

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted text and escape special characters
    $text = $conn->real_escape_string($_POST['textInput']);

    // Prepare the SQL query, with correct table name and backticks
    $sql = "INSERT INTO `text-sentence` (`text`) VALUES ('$text')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
