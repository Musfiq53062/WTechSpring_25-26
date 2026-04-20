<?php

$nameErr = "";
$emailErr = "";
$websiteErr = "";
$genderErr = "";
$commentErr = "";

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $website = $_REQUEST["website"];
    $comment = $_REQUEST["comment"];
    $gender = $_REQUEST["gender"];

    if(!empty ($name) && strlen($name)>=3){
        echo "Name: ".$name."<br>";
    }
    else{
        if(empty($name)){
            $nameErr = "Name is required";
        }
        else{
            $nameErr = "Name must be at least 3 characters";
        }
    }


    if(empty($email)){
        $emailErr = "Email is required"
    }
}
?>