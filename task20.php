<?php
//Make a calculator with these operations using if and else if
//o Submission 
//o Subtraction 
//o Multiplication 
//o Division 
//o Power 
//o Modulus 

function calculator($operation, $num1, $num2) {
    switch ($operation) {
        case 'addition':
            echo $num1 + $num2;
            break;
        case 'subtraction':
            echo $num1 - $num2;
            break;

        case 'multiplication':
            echo $num1 * $num2;
            break;

        case 'division':
            echo ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero.";
            break;

        case 'power':
            echo pow($num1, $num2);
            break;

        case 'modulus':
           if($num2!=0)
            {echo $num1%$num2;}
            else {echo "num2=0";}
            break;

        default:
            echo "Invalid operation.";
    }
}

$operation = 'modulus'; 
$num1 = 10;
$num2 = 6;
calculator($operation, $num1, $num2);


?>


