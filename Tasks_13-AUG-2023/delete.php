<?php

include('./database.php');

$sql = "DELETE FROM students WHERE student_id = '" . $_GET['student_id'] . "' ";

if (mysqli_query($conn, $sql)) { 
    // echo "<h1>Record Deleted successfully!</h1><br>";
    header("Location: select.php"); // Redirect to view.php
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $stmt->error;
}
?>