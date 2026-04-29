<?php
class dbForm {

    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "formdatabase";   

        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);

        if ($connection->connect_error) {
            die("Database Connection Failed: " . $connection->connect_error);
        }

        return $connection;
    }

    function insertFormData($connection, $tablename, $name, $email, $website, $comment, $gender)
    {
        $sql = "INSERT INTO " . $tablename . " (name, email, website, comment, gender)
                VALUES ('$name', '$email', '$website', '$comment', '$gender')";

        $result = $connection->query($sql);
        return $result;
    }

    function getAllUsers($connection, $tablename)
    {
        $sql = "SELECT * FROM " . $tablename;
        $result = $connection->query($sql);
        return $result;
    }
}
?>