<!-- one.php -->

<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

$message = "";

if (isset($_POST['reset'])) {

    $_SESSION['count'] = 0;
    $message = "Count has been reset.";

} else {

    $_SESSION['count']++;

    if (isset($_POST['check'])) {

        $input = $_POST['text'];

        if ($input == "") {

            $message = "";

        } elseif ($input == "0") {

            $message = "You entered zero.";

        } elseif ($input == "gmail.com") {

            $message = "You entered gmail.com.";

        } else {

            $message = "You entered " . $input . ".";

        }
    }
}
?>

<!DOCTYPE html>
<html>

<body>

    <h2>one.php</h2>

    <p>
        You have visited <?php echo $_SESSION['count']; ?> times.
    </p>

    <form method="post">

        Enter Text:
        <input type="text" name="text">

        <button name="check">Check</button>

        <button name="reset">Reset</button>

    </form>

    <p><?php echo $message; ?></p>

    <a href="two.php">Go to two.php</a>

</body>
</html>