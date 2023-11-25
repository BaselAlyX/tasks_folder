<?php
//Check from this string o If the string has “gain” Print ( success word ) 
//o If the string has ( peen ) Print ( success word )  Else ( wrong word )
$description = "no pain , no gain ";
if(str_contains($description,"gain"))
echo "success word"."<br>";
if (str_contains($description,"peen"))
{echo "success word";}
else {echo "wrong word";}

?>