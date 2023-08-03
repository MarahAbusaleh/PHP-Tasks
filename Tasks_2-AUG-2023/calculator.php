<h2 style="color:white; width: 400px; height: 50px; text-align: center; background-color: rgb(67, 67, 105); padding-top: 20px;">Calculator</h2>

<form action="calcresult.php" method = "GET">
    <label for="num1">First Number :</label>
    <input type="number" name="num1" required>
    <br> <br>
    <label for="num2" >Second Number :</label>
    <input type="number" name="num2" required>
    <br> <br>

    <input type="radio" id="sum" name="op" value="+">
    <label for="sum">+</label>
    <br>
    <input type="radio" id="min" name="op" value="-">
    <label for="min">-</label>
    <br>
    <input type="radio" id="multi" name="op" value="*">
    <label for="multi">*</label>
    <br>
    <input type="radio" id="div" name="op" value="/">
    <label for="div">/</label>
    <br> <br>
    <button type="submit" name = "submit" style="width: 400px; height: 50px; background-color: rgb(67, 67, 105); color: white; font-weight: bold; font-size: 20px;">submit</button>
</form>

<?php

session_start();

if(isset($_SESSION['result']))
{
    $result = $_SESSION['result'];
    echo 'RESULT = '.$result;
}

session_destroy();

?>