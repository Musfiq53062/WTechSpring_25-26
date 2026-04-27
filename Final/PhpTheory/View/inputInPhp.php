<!DOCTYPE html>
<html>
    <body>
        <h2> My First PHP Page</h2>
        
        <?php
        <form action="process.php" method="post"> 
            Name: <input type="text" name="username"><br> 
            Age: <input type="number" name="age"><br> 
            <input type="submit" value="Submit"> 
        </form> 

        $name = $_POST['username']; 
        $age = $_POST['age']; 
        echo "Hello, " . $name . "! You are " . $age . " years old."; 
        
        ?>
    </body>
</html>
        