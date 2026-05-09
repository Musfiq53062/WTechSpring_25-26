<?php
include "../Model/db.php";

session_start();

$name = "";
$email = "";
$password ="";
$website = "";
$comment = "";
$gender = "";

$datafile ="../data.json";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"] ?? "";

    $file = $_FILES["file"];

    if(
        !empty($name) &&
        strlen($name)>=3 &&
        !empty($email) &&
        !empty($password) && 
        strlen($password)>=4 &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        !empty($gender)
    )
    {

        echo "Registration Successful <br>";

        // SESSION
        $_SESSION["name"] = $name;
        $_SESSION["password"] = $password;

        // COOKIE
        setcookie("UserName",$name,time()+3600,"/");

        // JSON
        $formdata=array(
            "name"=>$name,
            "email"=>$email,
            "website"=>$website,
            "comment"=>$comment,
            "gender"=>$gender,
            "password"=>$password
        );

        if(file_exists($datafile))
        {
            $existdata = file_get_contents($datafile);

            $tempdata = json_decode($existdata,true);
        }
        else
        {
            $tempdata = array();
        }

        if(!is_array($tempdata))
        {
            $tempdata = array();
        }

        $tempdata[] = $formdata;

        $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);

        if(file_put_contents($datafile,$jsondata)!==false)
        {
            echo "Data Saved Successfully <br>";
        }
        else
        {
            echo "No Data Saved";
        }

        // FILE UPLOAD
        if($file)
        {
            $targetdirectory = "../File/";

            $path = $targetdirectory.basename($file["name"]);

            move_uploaded_file($file["tmp_name"],$path);
        }
        else
        {
            $path="";
        }

        // DATABASE
        $database = new db();

        $connection = $database->connection();

        $result = $database->signup(
            $connection,
            "users",
            $name,
            $email,
            $website,
            $comment,
            $gender,
            $path,
            $password
        );

        if($result)
        {
            Header("Location:../View/Login.php");
        }

    }
    else
    {
        echo "Please Use Appropriate Validation";
    }
}
?>