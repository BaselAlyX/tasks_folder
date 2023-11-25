<?php
// A program that calculates the size of a box whose length and width 
// are fixed with a value of 5 and 10 and the height is variable (size = length x width x height)
$l=5;
$w=10;
function get_box_area($l,$w,$h){echo "the area of box is=" .$l*$w*$h;}
echo get_box_area($l,$w,8)
?>