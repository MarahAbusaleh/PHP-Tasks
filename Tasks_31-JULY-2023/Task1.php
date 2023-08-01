<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 1.	Write a PHP script to see if the specified year is a leap year or not.
// Sample Input: 2013
// Sample Output: ‘This year is not a leap year’

echo "/*********************************************--1--***********************************************/";
echo '<br>';
echo '<br>';

$year = 2013;
if ($year % 400 == 0) {
    echo $year." is a leap year.";
} elseif ($year % 100 == 0) {
    echo $year." is not a leap year.";
} elseif ($year % 4 == 0) {
    echo $year." is a leap year.";
} else {
    echo $year." is not a leap year.";
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’

echo "/*********************************************--2--***********************************************/";
echo '<br>';
echo '<br>';

$temp = 27;
if($temp >20 ){
    echo "It is summertime!";
}
else{
    echo "It is wintertime!";
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’

echo "/*********************************************--3--***********************************************/";
echo '<br>';
echo '<br>';

$num1 = 2;
$num2 = 2;

if ($num1 == $num2) {
    echo ($num1+$num2) * 3 ;
}
else{
    echo "($num1+$num2)";
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

echo "/*********************************************--4--***********************************************/";
echo '<br>';
echo '<br>';

$num1 = 10;
$num2 = 10;
if ($num1 + $num2 == 30 ){
    echo "True";
}
else{
    echo 'False';
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

echo "/*********************************************--5--***********************************************/";
echo '<br>';
echo '<br>';

$num = 20 ;
if($num %3 == 0 ){
    echo("true");
}
else{
echo "False";
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’

echo "/*********************************************--6--***********************************************/";
echo '<br>';
echo '<br>';

$num = 50;
if($num >=20 && $num<=50){
    echo "True";
}
else{
    echo"False";
}

echo '<br>';
echo '<br>';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9

echo "/*********************************************--7--***********************************************/";
echo '<br>';
echo '<br>';

$nums = [1, 5, 9];
rsort($nums);
echo "$nums[0]";

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 8.	Write PHP script to calculate the monthly electricity bill according to these rules

// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit

echo "/*********************************************--8--***********************************************/";
echo '<br>';
echo '<br>';

$fRate = 2.50;
$sRate = 5.00;
$thRate = 6.20;
$lRate = 7.50;

$units = 260;

$totalBill = 0;

if ($units <= 50) {
    
    $totalBill = $units * $fRate;
} elseif ($units <= 150) {
    
    $totalBill = (50 * $fRate) + (($units - 50) * $sRate);
} elseif ($units <= 250) {
    
    $totalBill = (50 * $fRate) + (100 * $sRate) + (($units - 150) * $thRate);
} else {
    
    $totalBill = (50 * $fRate) + (100 * $sRate) + (100 * $thRate) + (($units - 250) * $lRate);
}

echo $totalBill;

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

echo "/*********************************************--9--***********************************************/";
echo '<br>';
echo '<br>';

$age=15;
if ($age>=18){
    echo "Eligible To Vote.";
}
else{
    echo"Not Eligible To Vote.";
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 10.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

echo "/*********************************************--10--***********************************************/";
echo '<br>';
echo '<br>';

$num = -60;
if($num>0){
    echo 'Positive';
}
elseif ($num<0){
    echo'Negative ';
}
else{
    echo 'Zero.';
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 11.	Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division

echo "/*********************************************--11--***********************************************/";
echo '<br>';
echo '<br>';

$operation = "*";
$num1 = 10;
$num2 = 20;
$ans;
switch($operation) {
    case "+":
        $ans = $num1 + $num2;
        break;
    
    case "-":
        $ans = $num1 - $num2;
        break;

    case "*":
        $ans = $num1 * $num2;
        break;

    case "/":
        $ans = $num1 / $num2;
}
echo $ans;

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

echo "/*********************************************--12--***********************************************/";
echo '<br>';
echo '<br>';

$grades = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$sum = array_sum($grades);
$avg = $sum / count($grades);

switch($avg) {
    case $avg < 60:
        echo "F";
        break;
    
    case $avg < 70:
        echo "D";
        break;

    case $avg < 80:
        echo "C";
        break;

    case $avg < 90:
        echo "B";
        break;

    case $avg <= 100:
        echo "A";
        break;

    default:
        echo "Invalid Grade";
        break;
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>