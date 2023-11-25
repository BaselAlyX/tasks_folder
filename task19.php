<?php
//Write a PHP script that stores a word and 
//determines Is the Word is Singular or Plural? (A plural word is one that ends in "s".)


function isPlural($word) {
    $lastCharacter = substr($word, -1);
        return $lastCharacter === 's';
}

$wordToCheck = "apples"; 
if (isPlural($wordToCheck)) {
    echo "$wordToCheck is plural.\n";
} else {
    echo "$wordToCheck is singular.\n";
}


?>