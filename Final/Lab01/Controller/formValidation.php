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

    
    if(empty($name)){
        $nameErr = "Email is required";
    }
    else{
        if(strlen($name)<3){
            $nameErr = "Name must be at least 3 characters";
        }
        else{
            echo "Name: ".$name."<br>";
        }
    }


    if(empty($email)){
        $emailErr = "Email is required";
    }
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
        else {
            echo "Email: " .$email. "<br>";
        }
    }


    if (!empty($website)) {
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL format";
        } 
        else {
            echo "Website: " .$website. "<br>";
        }
    }

    if(!empty($comment)){
        if(strlen($commnt) < 4){
            $commentErr = "Comment must be at least 5 characters";
        }
        else{
            echo "Comment: " .$comment. "<br>";
        }
    }

    

}
?>