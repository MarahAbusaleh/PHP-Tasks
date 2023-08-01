<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 1.	Create a script using a for loop to add all the integers between 0 and 30 and display the total.
//  **  Required **

// Expected Output:  total as a number 

echo "/*********************************************--1--***********************************************/";
echo '<br>';
echo '<br>';

$sum = 0;
for ($i=0; $i <=30 ; $i++) { 
    $sum += $i;
}
echo $sum;

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 2.	Create a script to generate the following pattern, using the nested for loop.
//  **  Optional **

// Expected Output:

// A A A A A 
// A A A B B 
// A A C C C 
// A D D D D 
// E E E E E

echo "/*********************************************--2--***********************************************/";
echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 3.	Create a script to generate the following pattern, using the nested for loop. .
//  **  Optional **

// Expected Output:

// 1 1 1 1 1 
// 1 1 1 2 2 
// 1 1 3 3 3 
// 1 4 4 4 4 
// 5 5 5 5 5

echo "/*********************************************--3--***********************************************/";
echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 4.	Create a script to generate the following pattern, using the nested for loop.
//  **  Required **

// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5

echo "/*********************************************--4--***********************************************/";
echo '<br>';
echo '<br>';

for ($i=0; $i <5 ; $i++) {

    for ($j=0; $j < 5; $j++) { 

        if($i == $j){
            echo $j+1 . " ";
        }
        else{
            echo 0 . " ";
        }
    }

    echo '<br>';
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 5.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a
// number is the product of all integers up to and including that number. 
// **  Required **

// Sample Input: 5
// Expected Output: 120

echo "/*********************************************--5--***********************************************/";
echo '<br>';
echo '<br>';

$facto = 1;
for ($i=1; $i <= 5; $i++) { 
    $facto *= $i;
}
echo $facto;

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 6.	Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. 
// Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
// **  Required **

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … 


echo "/*********************************************--6--***********************************************/";
echo '<br>';
echo '<br>';

$num1=1; 
$num2=0;

for($i=0;$i<=15;$i++){
    echo " $num2,";
    $temp = $num1+$num2;
    $num1 = $num2;  
    $num2 = $temp; 	
}

echo '<br>';
echo '<br>';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 7.	Write a PHP script that creates the following table using for loops.
//  Add cellpadding="3px" and cell spacing="0px" to the table tag. 
// . **  Optional **

echo "/*********************************************--7--***********************************************/";
echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 8.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead
//  of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, 
//  print "FizzBuzz".
//  . **  Optional **

// Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….


echo "/*********************************************--8--***********************************************/";
echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 9.	Write a PHP program to generate and display the first n lines of a Floyd triangle 
// **  Required **

// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15


echo "/*********************************************--9--***********************************************/";
echo '<br>';
echo '<br>';

$num = 1;
for ($i=1; $i <=5 ; $i++) {

    for ($j=1; $j <=$i; $j++) { 

        echo $num ." ";
        $num++;
    }

    echo '<br>';
}

echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 10.	Write a PHP program to print the following pattern. 
// . **  Optional **

// Expected Output:

//      A 
//     A B 
//    A B C 
//   A B C D 
//  A B C D E 
//   A B C D 
//    A B C 
//     A B 
//      A

echo "/*********************************************--10--***********************************************/";
echo '<br>';
echo '<br>';



echo '<br>';
echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>