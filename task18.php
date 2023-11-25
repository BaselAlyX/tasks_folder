

<?php
//A Boolean is a data type that has only two values true or false. 
//These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean. 
// Function to toggle the boolean value
function toggleBoolean($inputBoolean) {
    
    $oppositeBoolean = !$inputBoolean;

    echo "Original Boolean: $inputBoolean\n";
    echo "Opposite Boolean: $oppositeBoolean\n";
}

$inputBoolean = 0; 
toggleBoolean($inputBoolean);

?>



