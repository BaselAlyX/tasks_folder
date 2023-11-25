<?php
//Get the length of this sentence without spaces.EraaSoft Learn by practice

$sentence = "EraaSoft Learn by practice";
$sentenceWithoutSpaces = str_replace(' ', '', $sentence);
$lengthWithoutSpaces = strlen($sentenceWithoutSpaces);
echo "Original sentenceis $sentence"."<br>";
echo "Length without spaces is $lengthWithoutSpaces";

?>