<?php
session_start();

$username = $_SESSION["UserName"] ?? "Guest";

$filepath = $_SESSION["filepath"] ?? "";
?>

<!DOCTYPE html>

<html>

<head>
    <title>Dashboard</title>
</head>

<body>

<?php
echo "Hello ".$username;
?>

<br><br>

<a href="../Controller/Logout.php">Logout</a>

<br><br>

<?php
if(!empty($filepath))
{
    echo "<img src='../File/".basename($filepath)."' height='200px' width='200px'>";
}
else
{
    echo "No Image Uploaded";
}
?>

</body>

</html>