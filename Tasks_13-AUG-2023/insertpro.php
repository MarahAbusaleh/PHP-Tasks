<?php

include_once './database.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "INSERT INTO students (student_name, age, student_email) VALUES ('$name', '$age', '$email')";
}

if (mysqli_query($conn, $sql)) { 
    // echo "<h1>New Record Inserted successfully!</h1><br>";
    header("Location: select.php"); // Redirect to view.php
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $stmt->error;
}

?>