<?php

include "../Model/db.php";

$db=new db();
$conn=$db->connection();

$result=$db->getStudentById($conn,"students",$_POST["id"]);

echo json_encode($result->fetch_assoc());

?>