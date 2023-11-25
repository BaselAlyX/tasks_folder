<?php
//Write a PHP script to split the following string.
//Sample string: 'ErraSoft' 
//Expected Output: Er/ra/So/ft
//This script uses str_split to split the string into an array of characters, 
//each containing two characters. Then, it uses implode to join these characters
 //back together with the specified separator ("/"). When you run this script

 $sampleString = 'ErraSoft';
 
 $characters = str_split($sampleString, 2);
 
 $result = implode('/', $characters);
 
 echo $result;
 
 

?>