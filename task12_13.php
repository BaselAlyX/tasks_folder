<?php  
//Make a new variable called (Full_string) that concatenate string_one and string_two $string_one = "Eraa", 
//$string_two = "Soft";
$string_one = "Eraa";
$string_two = "Soft";
$full_string=$string_one.$string_two;
echo $full_string ."<br>";

//Compare the full_string and this string (EraaSoft).
echo strlen($full_string)."<br>"."<hr>";

$x="EraaSoft";
echo $x ."<br>";
echo strlen($x);



?>