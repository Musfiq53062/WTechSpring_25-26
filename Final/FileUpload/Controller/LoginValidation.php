<?php
include "../Model/db.php";

session_start();

$name = "";
$password = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST["name"]);
    $password = trim($_POST["password"]);

    if(!empty($name) && !empty($password))
    {

        $database = new db();

        $connection = $database->connection();

        $result = $database->signin(
            $connection,
            "users",
            $name,
            $password
        );

        if($result && $result->num_rows > 0)
        {

            $_SESSION["loggedIn"] = true;

            $_SESSION["UserName"] = $name;

            $row = $result->fetch_assoc();

            $_SESSION["filepath"] = $row["filepath"];

            Header("Location:../View/Dashboard.php");
        }
        else
        {
            echo "Invalid Login";
        }
    }
}
?>