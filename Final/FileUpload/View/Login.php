<?php
session_start();

$isloggedIn = $_SESSION["loggedIn"] ?? false;

if($isloggedIn)
{
    Header("Location:Dashboard.php");
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>Login</title>
</head>

<body>

<h1>Login Page</h1>

<form method="post" action="../Controller/LoginValidation.php">

<table>

<tr>
    <td>Name:</td>
    <td><input type="text" name="name"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
</tr>

<tr>
    <td>
        <input type="submit" value="Login">
    </td>
</tr>

</table>

</form>

</body>
</html>