<?php

session_start();
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];

    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
    }

    $valid = true;

    if (empty($name)) {
        $nameErr = "Name is required";
        $valid = false;
    } 
    else {
        if (strlen($name) < 3) {
            $nameErr = "Name must be at least 3 characters";
            $valid = false;
        } 
        else {
            echo "Name: " .$name. "<br>";
        }
    }


    if (empty($email)) {
        $emailErr = "Email is required";
        $valid = false;
    } 
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $valid = false;
        } 
        else {
            echo "Email: " .$email. "<br>";
        }
    }


    if (!empty($website)) {
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL format";
            $valid = false;
        } 
        else {
            echo "Website: " .$website. "<br>";
        }
    }


    if (!empty($comment)) {
        if (strlen($comment) < 4) {
            $commentErr = "Comment must be at least 4 characters";
            $valid = false;
        } 
        else {
            echo "Comment: " .$comment. "<br>";
        }
    }


    if (empty($gender)) {
        $genderErr = "Gender is required";
        $valid = false;
    } 
    else {
        echo "Gender: " .$gender. "<br>";
    }

    if($valid){
        $_SESSION["name"] =$name;
        setcookie("name", $name, time() +3600, "/");
        echo "Form Submitted Successfully <br>";
    }
    else {
        echo "Please fix errors and try again <br>";
    }  
}


if (isset($_SESSION["name"]) || isset($_COOKIE["name"])) {
    echo "Welcome Back " . ($_SESSION["name"] ?? $_COOKIE["name"]);
} else {
    echo "Please submit the form!";
}

?>