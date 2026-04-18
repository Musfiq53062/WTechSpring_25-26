<?php 

// Type Juggling (Automatic Conversion):  

$x = "10";   // string 
$y = 5;      // integer 
$z = $x + $y; // string "10" is converted to integer 10 
 
echo $z, "<br>"; // Output: 15 
echo gettype($z); // Output: integer 


//Type Casting (Manual Conversion):  
echo "<br><br>";
$a = "100"; 
$b = (int)$a;   // Convert string to integer 
$c = 12.34; 
$d = (string)$c; // Convert float to string 
 
echo $b; echo " (" . gettype($b) . ")<br>";   
echo $d; echo " (" . gettype($d) . ")"; 
?>