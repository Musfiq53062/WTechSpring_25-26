<?php
include "../Controller/RegistrationController.php";
?>

<!DOCTYPE html>

<html>

<head>
    <title>Registration</title>
</head>

<body>

<h1>Registration Form</h1>

<form
method="post"
action="../Controller/RegistrationController.php"
enctype="multipart/form-data"
>

<table>

<tr>
    <td>Name:</td>
    <td><input type="text" name="name"></td>
</tr>

<tr>
    <td>Email:</td>
    <td><input type="text" name="email"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
</tr>

<tr>
    <td>Website:</td>
    <td><input type="text" name="website"></td>
</tr>

<tr>
    <td>Comment:</td>
    <td><textarea name="comment"></textarea></td>
</tr>

<tr>
    <td>Gender:</td>

    <td>
        <input type="radio" name="gender" value="Male">Male

        <input type="radio" name="gender" value="Female">Female

        <input type="radio" name="gender" value="Other">Other
    </td>
</tr>

<tr>
    <td>Upload File:</td>

    <td>
        <input type="file" name="file">
    </td>
</tr>

<tr>
    <td>
        <input type="submit" value="Register">
    </td>
</tr>

</table>

</form>

</body>
</html>