<?php
include "../Controller/formValidation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> PHP Form Validation </title>
    </head>
    <body>
        <h2>PHP Form Validation Example</h2>
        <p style ="color:red">* required feild</p>
        <form method="post" action="">
            <table>
                
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"> <?php echo $nameErr; ?></td>
                    <td style="color:red">*</td>
                </tr>
                
                
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"> <?php echo $emailErr; ?></td>
                    <td style="color:red">*</td>
                </tr>
                
                
                <tr>
                    <td>Website:</td>
                    <td><input type="text" name="website"> <?php echo $websiteErr; ?></td>
                </tr>
                
                
                <tr>
                    <td>Comment:</td>
                    <td><textarea name="comment"></textarea><?php echo $commentErr; ?></td>
                </tr> 
                
                
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Other">Other
                        <?php echo $genderErr; ?>
                    </td>
                    <td style="color:red">*</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type ="submit" name="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
