<?php

class db
{
    function connection()
    {
        return new mysqli("localhost", "root", "", "university_library");
    }

    function addBook($c, $t, $title, $author, $cat, $a)
    {
        return $c->query("INSERT INTO $t VALUES(NULL,'$title','$author','$cat','$a')");
    }

    function getBooks($c, $t)
    {
        return $c->query("SELECT * FROM $t");
    }

    function getBookById($c, $t, $id)
    {
        return $c->query("SELECT * FROM $t WHERE id=$id");
    }

    function updateBook($c, $t, $id, $title, $author, $cat, $a)
    {
        return $c->query(
            "UPDATE $t SET 
            title='$title',
            author='$author',
            category='$cat',
            availability='$a'
            WHERE id=$id"
        );
    }

    function deleteBook($c, $t, $id)
    {
        return $c->query("DELETE FROM $t WHERE id=$id");
    }
}

?>