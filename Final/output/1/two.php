<!-- two.php -->

<?php

$message = "";

if (!isset($_COOKIE['count'])) {

    $count = 1;

} else {

    $count = $_COOKIE['count'] + 1;

}

setcookie("count", $count, time() + 3600, "/");

if (isset($_POST['condition1'])) {

    $a = 0;
    $b = "0";
    $c = 10;

    if ($a == $b && $c > 5) {

        $message = "Condition 1 is TRUE.";

    } else {

        $message = "Condition 1 is FALSE.";

    }
}

if (isset($_POST['condition2'])) {

    $x = "";
    $y = null;
    $z = 20;

    if (empty($x) && $y === null && $z > 50) {

        $message = "Condition 2 is TRUE.";

    } else {

        $message = "Condition 2 is FALSE.";

    }
}

if (isset($_POST['reset'])) {

    $count = 0;

    setcookie("count", 0, time() + 3600, "/");

    $message = "Count has been reset.";

}
?>

<!DOCTYPE html>
<html>

<body>

    <h2>two.php</h2>

    <p>
        You have visited <?php echo $count; ?> times.
    </p>

    <form method="post">

        <button name="condition1">
            Performance 1
        </button>

        <button name="condition2">
            Performance 2
        </button>

        <button name="reset">
            Reset
        </button>

    </form>

    <p><?php echo $message; ?></p>

    <a href="one.php">Go to one.php</a>

</body>
</html>