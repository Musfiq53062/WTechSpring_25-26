<?php

include "../Model/db.php";

$db=new db();
$conn=$db->connection();

$result=$db->getStudents($conn,"students");

$data=[];

while($row=$result->fetch_assoc()){
    $data[]=$row;
}

echo json_encode($data);

?>