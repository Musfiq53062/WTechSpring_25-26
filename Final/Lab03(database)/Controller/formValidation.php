<?php 

include "../Model/dbForm.php";
session_start();

$nameErr = "";
$emailErr = "";
$websiteErr = "";
$commentErr = "";
$genderErr = "";

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

    $valid = true;

    if (empty($name)) {
        $nameErr = "Name is required";
        $valid = false;
    } elseif (strlen($name) < 3) {
        $nameErr = "Name must be at least 3 characters";
        $valid = false;
    }

    if (empty($email)) {
        $emailErr = "Email is required";
        $valid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $valid = false;
    }

    if (!empty($website)) {
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL format";
            $valid = false;
        }
    }

    if (!empty($comment)) {
        if (strlen($comment) < 4) {
            $commentErr = "Comment must be at least 4 characters";
            $valid = false;
        }
    }

    if (empty($gender)) {
        $genderErr = "Gender is required";
        $valid = false;
    }

    if ($valid) {

        $_SESSION["name"] = $name;
        setcookie("name", $name, time() + 3600, "/");

        echo "<h3>Submitted Information:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Website: " . $website . "<br>";
        echo "Comment: " . $comment . "<br>";
        echo "Gender: " . $gender . "<br><br>";
        echo "Form Submitted Successfully <br>";

        $formdata = array(
            "Name" => $name,
            "Email" => $email,
            "Website" => $website,
            "Comment" => $comment,
            "Gender" => $gender
        );

        if (file_exists($datafile)) {
            $existingdata = file_get_contents($datafile);
            $tempdata = json_decode($existingdata, true);
        } else {
            $tempdata = array();
        }

        if (!is_array($tempdata)) {
            $tempdata = array();
        }

        $tempdata[] = $formdata;
        file_put_contents($datafile, json_encode($tempdata, JSON_PRETTY_PRINT));

        echo "Data saved in JSON <br>";

        $database = new dbForm();
        $connection = $database->connection();

        $result = $database->insertFormData(
            $connection,
            "users",
            $name,
            $email,
            $website,
            $comment,
            $gender
        );

        if ($result) {
            echo "Data inserted into database <br>";
        } else {
            echo "Database insertion failed <br>";
        }

    } else {
        echo "Please fix errors and try again <br>";
    }
}

if (isset($_SESSION["name"]) || isset($_COOKIE["name"])) {
    echo "Welcome Back " . ($_SESSION["name"] ?? $_COOKIE["name"]);
} else {
    echo "Please submit the form!";
}

?>