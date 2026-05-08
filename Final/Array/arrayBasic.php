<?php

$fruits = ["Apple", "Banana", "Mango"];
$vehicles = array("Car","Bus","Truck","Bike");
$emptyArray =[];

// Associative array: Arrays with custom keys instead of numeric indexes
$ages = [
    "Nihan" => 34,
    "Alif"=> 23,
    "Monir"=> 20
];
echo "Fruits = ";
print_r($fruits);echo"<br>";
echo "Vehicles =";
print_r($vehicles);echo"<br>";
echo "Ages     =";
print_r($ages);echo"<br><br>";

echo $fruits[2]."<br>";
echo $vehicles[2]."<br>";
echo $ages["Alif"]."<br><br>";

$fruits[1]="Orrange";
echo "Fruits[1]=".$fruits[1]."<br>";
echo "Fruits = ";
print_r($fruits);
echo "<br><br>";

$ages["Monir"]=25;
echo "ages[Monir]=".$ages["Monir"]."<br>";
echo"Ages:";
print_r($ages);

echo "<br><br>Multidimensional array"."<br>";
$matrix =[
    [1,3,5],
    [2,4,6],
];
print_r($matrix);
$matrix[1][2]=8;
echo "<br>Matrix[1][2]=".$matrix[1][2]."<br>";
print_r($matrix);

echo "<br><br>Functions:<br>";

echo "Fruits count:".count($fruits)."<br>";
echo "Vehicles count:".count($vehicles)."<br>";
echo "Ages count:".count($ages)."<br>";

array_push($fruits,"Banana");
print_r($fruits);echo "-->push at last<br>";
array_unshift($fruits,"Lichis");
print_r($fruits); echo "push at first<br>";

array_pop($fruits);
print_r($fruits);echo "-->poped last<br>";
array_shift($fruits);
print_r($fruits);echo "-->poped first<br>";


print_r(array_merge($fruits,$vehicles));echo "<br>";
print_r($fruits);echo "<br>";
echo in_array("Mango",$fruits)."<br>"; //return 1 if exist otherwise nothing

echo array_key_exists("Monir",$ages)."<br>"; //return 1 if exist otherwise nothing

print_r(array_slice($fruits, 1,2));echo "<br>"; //array_slice($arr, $start, $length)
print_r($fruits);echo "<br>";

echo "found at index ".array_search("Mango", $fruits)."<br>";

sort($fruits);//Sorts array ascending 
print_r($fruits);echo "--> ascending sort<br>";

rsort($fruits);//Sorts array descending 
print_r($fruits);echo "--> descnding sort<br><br>";

asort($ages);//ascending sort  associative array by value 
print_r($ages);echo "--> ascending sort by value<br>";

arsort($ages);//descending sort  associative array by value
print_r($ages);echo "--> descnding sort by value<br>";

ksort($ages);//Sorts associative array by key (ASC)
print_r($ages);echo "--> Sorts associative array by key(ASC) <br>";
krsort($ages);//Sorts associative array by key (DESC) 
print_r($ages);echo "--> Sorts associative array by key(DESC)<br>";

?>