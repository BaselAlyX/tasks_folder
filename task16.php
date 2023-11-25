<?php
// Write a PHP script that stores the string as a variable and checks if the length is odd or even.
$string = "hamada yal3ab"; 
$length = strlen($string);
echo $length."<br>";
if ($length % 2 == 0) {
    echo "The length of the string is even.";
} else {
    echo "The length of the string is odd.";
}
?>


