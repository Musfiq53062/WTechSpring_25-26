<?php

//1
$marks =[85,94,38,58,95];

$sum=0;
for($i=0; $i<count($marks); $i++){
    $sum+=$marks[$i];
}
$avg=$sum/count($marks);
echo "Average mark: ".$avg."<br>";

//2
$prices =[250,645,300,900,50];
for($i=0; $i<count($prices); $i++){
    $prices[$i]=$prices[$i]-$prices[$i]*0.01;
}
echo "Final prices after discount: ";
print_r($prices);


?>