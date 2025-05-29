<?php

    //even or odd number

    $number = 10;
    if($number % 2 == 0) {
        echo "$number is an even number";
    } else {
        echo "$number is an odd number";
    }

    $num1 = 20;
    $num2 = 10;
    $action = "+";

    switch($action) {
        case "+":
            $result = $num1 + $num2;
            echo "<br>";
            echo "$num1 + $num2 = $result";
            break;
        case "-":
            $result = $num1 - $num2;
            echo "<br>";
            echo "$num1 - $num2 = $result";
            break;
        case "*":
            $result = $num1 * $num2;
            echo "<br>";
            echo "$num1 * $num2 = $result";
            break;
        case "/":
            if($num2 != 0) {
                $result = $num1 / $num2;
                echo "<br>";
                echo "$num1 / $num2 = $result";
            } else {
                echo "<br>";
                echo "Error: Division by zero is not allowed.";
            }
            break;
        default:
            echo "<br>";
            echo "Error: Invalid action.";

        //while loop: 
    }
?>