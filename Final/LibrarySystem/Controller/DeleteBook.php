<?php

include "../Model/db.php";

$db = new db();
$conn = $db->connection();

$db->deleteBook($conn, "books", $_POST["id"]);

echo "Deleted";

?>