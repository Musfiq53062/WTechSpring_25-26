<?php

include "../Model/db.php";

$db=new db();
$conn=$db->connection();

$db->addStudent(
$conn,
"students",
$_POST["name"],
$_POST["email"],
$_POST["registration_no"],
$_POST["department"]
);

echo "Student Added";

?>