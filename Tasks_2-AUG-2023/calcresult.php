<?php

session_start();

if(isset($_GET['submit']))
{
    $oper = $_GET['op'];
    $_SESSION['operation'] = $oper;
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $_SESSION['number1'] = $num1;
    $_SESSION['number2'] = $num2;
    
    switch($_SESSION['operation'])
    {
        case '+' : 
            $result = $num1 + $num2;
            $_SESSION['result'] = $result;
            header("location:calculator.php");
            break;

        case '-' :
            $result = $num1 - $num2;
            $_SESSION['result'] = $result;
            header("location:calculator.php");
            break;
            
        case '*' : 
            $result = $num1 * $num2;
            $_SESSION['result'] = $result;
            header("location:calculator.php");
            break;

        case '/' : 
            if($num2 !=0 )
            {
                $result = $num1 / $num2;
                $_SESSION['result'] = $result;
                header("location:calculator.php");
            }
            else 
            {
                $result = "You can't divide by 0, Enter another Number";
                $_SESSION['result'] = $result;
                header("location:calculator.php");
            }
            break;
    }
}

?>