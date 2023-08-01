<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 1.	** Required ** $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list : 
// Expected Output:  
// •	green
// •	red
// •	white

echo "/*********************************************--1--***********************************************/";
echo '<br>';
echo '<br>';

$colors = array('white', 'green', 'red') ;

foreach ($colors as $color) {
    echo "<li>$color</li>";
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2.	** Required **
// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

echo "/*********************************************--2--***********************************************/";
echo '<br>';
echo '<br>';

$cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}


echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 3.	**  Required ** 
// $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

echo "/*********************************************--3--***********************************************/";
echo '<br>';
echo '<br>';

$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

echo $color[4];

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 4.	**  Required ** 
// Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange

echo "/*********************************************--4--***********************************************/";
echo '<br>';
echo '<br>';

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " = " . $value . '<br>';
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 5.	**  Optional ** 
// Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures. 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,

echo "/*********************************************--5--***********************************************/";
echo '<br>';
echo '<br>';



echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 6.	**  Optional ** 
// Write a PHP program to merge the following two arrays. 

// Sample Input: 

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Expected Output:

// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )

echo "/*********************************************--6--***********************************************/";
echo '<br>';
echo '<br>';



echo '<br>';
echo '<br>';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 7.	**  Optional **
// Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.      

// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

echo "/*********************************************--7--***********************************************/";
echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 8.	**  Required ** 
// Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

// $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.

echo "/*********************************************--8--***********************************************/";
echo '<br>';
echo '<br>';

$words =  array("abcd","abc","de","hjjj","g","wer");
$longest = $words[0];
$shortest = $words[0];

    for ($i=0; $i < count($words); $i++) {
        if (strlen($words[$i]) > strlen($longest)) {
            $longest = $words[$i];       
        }
        if (strlen($words[$i]) < strlen($shortest)) {
            $shortest = $words[$i];
        }
    }
echo "The shortest array length is " . strlen($shortest) . " The longest array length is " . strlen($longest) . "<br>";

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 9.	**  Optional ** 
// Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12

echo "/*********************************************--9--***********************************************/";
echo '<br>';
echo '<br>';



echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 10.	**  Optional ** 
// Write a PHP script that returns the lowest integer in the array  that is not 0. 

// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2

echo "/*********************************************--10--***********************************************/";
echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>