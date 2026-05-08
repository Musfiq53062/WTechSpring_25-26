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
echo "<br>Final prices after discount: ";
print_r($prices);echo "<br><br>";

//3

$companies=["Bloomberg","Microsoft","Uber","Google","IBM","Netflix"];
print_r($companies); echo "<br>";
array_shift($companies);
print_r($companies); echo "<br>";

$uberIndex=array_search("Uber",$companies);
$companies[$uberIndex]="Ola";
print_r($companies); echo "<br>";
array_push($companies,"Amazon");
print_r($companies); echo "<br>";

?>