<?php
include "../Model/dbForm.php";
session_start();

$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";

$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize input
    $name = htmlspecialchars(trim($_POST["name"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $website = htmlspecialchars(trim($_POST["website"] ?? ""));
    $comment = htmlspecialchars(trim($_POST["comment"] ?? ""));
    $gender = $_POST["gender"] ?? "";

    $file = $_FILES["file"];
    $valid = true;

    // Validation
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


    if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
        $websiteErr = "Invalid URL format";
        $valid = false;
    }


    if (!empty($comment) && strlen($comment) < 4) {
        $commentErr = "Comment must be at least 4 characters";
        $valid = false;
    }


    if (empty($gender)) {
        $genderErr = "Gender is required";
        $valid = false;
    }


    // If valid
    if ($valid) {

        // SESSION
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["website"] = $website;
        $_SESSION["comment"] = $comment;
        $_SESSION["gender"] = $gender;

        // COOKIE (secure)
        setcookie("name", $name, time() + 3600, "/", "", false, true);
        setcookie("email", $email, time() + 3600, "/", "", false, true);
        setcookie("website", $website, time() + 3600, "/", "", false, true);
        setcookie("comment", $comment, time() + 3600, "/", "", false, true);
        setcookie("gender", $gender, time() + 3600, "/", "", false, true);

        echo "Session and Cookie set successfully.<br><br>";

        // JSON DATA
        $formdata = [
            "Name" => $name,
            "Email" => $email,
            "Website" => $website,
            "Comment" => $comment,
            "Gender" => $gender
        ];

        $tempdata = [];

        if (file_exists($datafile)) {
            $existingdata = file_get_contents($datafile);
            $tempdata = json_decode($existingdata, true);

            if (!is_array($tempdata)) {
                $tempdata = [];
            }
        }

        $tempdata[] = $formdata;
        file_put_contents($datafile, json_encode($tempdata, JSON_PRETTY_PRINT));

        echo "Data saved in JSON<br>";

        // DATABASE
        $database = new dbForm();
        $connection = $database->connection();

        $result = $database->insertFormdata($connection, "users", $name, $email, $website, $comment, $gender);

        if ($result) {
            echo "Data inserted into Database<br>";
        } else {
            echo "Database insertion failed<br>";
        }

    } 
    else {
        echo "Please correct the errors and submit again.<br>";
    }
}

// DISPLAY DATA
if (isset($_SESSION["name"])) {

    echo "Welcome Back " . $_SESSION["name"] . "<br><br>";

    echo "<b>Stored Data:</b><br>";
    echo "Name: " . $_SESSION["name"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
    echo "Website: " . $_SESSION["website"] . "<br>";
    echo "Comment: " . $_SESSION["comment"] . "<br>";
    echo "Gender: " . $_SESSION["gender"] . "<br>";

} elseif (isset($_COOKIE["name"])) {

    echo "Welcome Back " . $_COOKIE["name"] . "<br><br>";

    echo "<b>Stored Data:</b><br>";
    echo "Name: " . $_COOKIE["name"] . "<br>";
    echo "Email: " . $_COOKIE["email"] . "<br>";
    echo "Website: " . $_COOKIE["website"] . "<br>";
    echo "Comment: " . $_COOKIE["comment"] . "<br>";
    echo "Gender: " . $_COOKIE["gender"] . "<br>";

} else {
    echo "Please submit the form!";
}
?>