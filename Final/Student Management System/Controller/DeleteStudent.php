<?php

include "../Model/db.php";

$db=new db();
$conn=$db->connection();

$db->deleteStudent($conn,"students",$_POST["id"]);

echo "Student Deleted";

?>