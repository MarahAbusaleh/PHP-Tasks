<?php

include('./database.php');

$sql = "DELETE FROM students WHERE student_id = '" . $_GET['student_id'] . "' ";
//PDO
// $result = $conn->prepare("DELETE FROM students WHERE student_id = :student_id");
// $result ->bindParam(':student_id' , $_GET['student_id']);

// $result-> execute();

if (mysqli_query($conn, $sql)) { 
    // echo "<h1>Record Deleted successfully!</h1><br>";
    header("Location: select.php"); // Redirect to view.php
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $stmt->error;
}
?>