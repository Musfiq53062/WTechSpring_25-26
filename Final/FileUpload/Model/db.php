<?php

class db
{

    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "user";

        $connection = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_name
        );

        if($connection->connect_error)
        {
            die("Database Connection Failed");
        }

        return $connection;
    }

    function signup(
        $connection,
        $tablename,
        $name,
        $email,
        $website,
        $comment,
        $gender,
        $filepath,
        $password
    )
    {

        $sql = "INSERT INTO ".$tablename."
        (
            name,
            email,
            website,
            comment,
            gender,
            filepath,
            password
        )

        VALUES
        (
            '".$name."',
            '".$email."',
            '".$website."',
            '".$comment."',
            '".$gender."',
            '".$filepath."',
            '".$password."'
        )";

        $result = $connection->query($sql);

        return $result;
    }

    function signin(
        $connection,
        $tablename,
        $name,
        $password
    )
    {

        $sql = "SELECT * FROM ".$tablename."
        WHERE TRIM(name)=TRIM('".$name."')
        AND TRIM(password)=TRIM('".$password."')";

        $result = $connection->query($sql);

        return $result;
    }
}
?>