<?php

include "../Model/db.php";

$db = new db();
$conn = $db->connection();

$db->updateBook(
    $conn,
    "books",
    $_POST["id"],
    $_POST["title"],
    $_POST["author"],
    $_POST["category"],
    $_POST["availability"]
);

echo "Updated";

?>