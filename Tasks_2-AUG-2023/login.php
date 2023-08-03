<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>

    <form action="pro_login.php" method="GET">
        <label for="uname">UserName:</label>
        <input type="text" name="uname" id="uname" require>
        <br><br>
        <label for="mail">Email:</label>
        <input type="text" name="mail" id="mail" require>
        <br><br>
        <label for="passw">Password:</label>
        <input type="text" name="passw" id="passw" require>
        <br><br>
        <input type="submit" name="login" id="login" value="login">

    </form>

</body>
</html>

<?php



?>