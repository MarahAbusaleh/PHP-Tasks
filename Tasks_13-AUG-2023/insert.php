<?php

include_once './database.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "INSERT INTO students (student_name, age, student_email) VALUES ('$name', '$age', '$email')";


if (mysqli_query($conn, $sql)) { 
    // echo "<h1>New Record Inserted successfully!</h1><br>";
    header("Location: select.php"); // Redirect to view.php
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $stmt->error;
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert Data</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nicecss@2.1.0/dist/nice.css">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f5f5f5;
    }
    h1{
        position: absolute;
        top: 0px;
    }

    .form-container {
        width: 300px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-input {
        margin-bottom: 15px;
    }

    .form-label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .form-input input[type="text"],
    .form-input input[type="email"],
    .form-input input[type="password"],
    .form-input input[type="tel"],
    .form-input input[type="number"],
    .form-input input[type="date"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-input input[type="text"]:focus,
    .form-input input[type="email"]:focus,
    .form-input input[type="password"]:focus,
    .form-input input[type="tel"]:focus,
    .form-input input[type="date"]:focus {
        outline: none;
        border-color: #8D0039;
    }

    .form-button {
        text-align: center;
    }

    .form-button button {
        background-color: #8D0039;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-button button:hover {
        background-color: #AA1047;
    }
</style>
</head>
<body>
<div class="form-container">
    <form method="post" action="">
        <div class="form-input">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-input">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-input">
            <label for="age" class="form-label">Age</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div class="form-button">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>

