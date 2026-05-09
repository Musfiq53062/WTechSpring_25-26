<?php

include "../Model/db.php";

$db = new db();
$conn = $db->connection();

$db->addBook(
    $conn,
    "books",
    $_POST["title"],
    $_POST["author"],
    $_POST["category"],
    $_POST["availability"]
);

echo "Book Added";

?>