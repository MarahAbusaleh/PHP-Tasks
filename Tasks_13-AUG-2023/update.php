<?php

include('./database.php');

if(count($_POST) > 0){

    $id = $_POST["student_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $updateResult = mysqli_query($conn, "UPDATE students SET student_name = '$name', student_email = '$email', age = '$age' WHERE student_id = $id");

    if (!$updateResult) {
        echo "Update error: " . mysqli_error($conn);
    }   
    else{
        // echo "DONE!!!!!!!!!!!";
        header("Location: select.php"); // Redirect to view.php
        exit(); // Make sure to exit after redirection
    }
}

$result = mysqli_query($conn, "SELECT * FROM students WHERE student_id = '" . $_GET['student_id'] . "' ");
$record = mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Data</title>
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
    .form-input input[type="hidden"],
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
            <label for="name" class="form-label">ID</label>
            <input type="hidden" id="student_id" name="student_id" value="<?php echo $record["student_id"]; ?>" required>
            <?php echo $record["student_id"]; ?>
        </div>
        <div class="form-input">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $record["student_name"]; ?>" required>
        </div>
        <div class="form-input">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $record["student_email"]; ?>" required>
        </div>
        <div class="form-input">
            <label for="age" class="form-label">Age</label>
            <input type="number" id="age" name="age" value="<?php echo $record["age"]; ?>" required>
        </div>
        <div class="form-button">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>


