<?php
include "../Controller/formValidation.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Log In Form</title>
</head>
<body>

<form method="post" action="">
    <table>
        <tr>
            <td>
                <p style="color:red;">* Required Field</p>
            </td>
        </tr>

        <tr>
            <td><label for="name">User Name:</label></td>
            <td>
                <input type="text" id="name" name="name">
                <?php echo $name; ?>
            </td>
            <td><span style="color:red;">*</span></td>
        </tr>

        <tr>
            <td><label for="email">E-mail:</label></td>
            <td>
                <input type="email" id="email" name="email">
                <?php echo $email; ?>
            </td>
            <td><span style="color:red;">*</span></td>
        </tr>

        <tr>
            <td><label for="website">Website:</label></td>
            <td>
                <input type="text" id="website" name="website">
                <?php echo $Website; ?>
            </td>
        </tr>

        <tr>
            <td><label for="comment">Comment:</label></td>
            <td>
                <textarea id="comment" name="comment"></textarea>
                <?php echo $comment; ?>
            </td>
        </tr>

        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Other"> Other
                <?php echo $gender; ?>
            </td>
            <td><span style="color:red;">*</span></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>

</body>
</html>