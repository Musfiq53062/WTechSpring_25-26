<?php

include "../Model/db.php";

header("Content-Type: application/json");

$term = $_POST["term"] ?? "";

$db = new db();
$conn = $db->connection();

if (!empty($term)) {
    $result = $db->searchBooks($conn, "books", $term);
} else {
    $result = $db->getAllBooks($conn, "books");
}

$books = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

echo json_encode($books);
?>