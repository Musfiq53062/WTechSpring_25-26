<?php

include "../Model/db.php";

$db=new db();
$conn=$db->connection();

$db->updateStudent(
$conn,
"students",
$_POST["id"],
$_POST["name"],
$_POST["email"],
$_POST["registration_no"],
$_POST["department"]
);

echo "Student Updated";

?>