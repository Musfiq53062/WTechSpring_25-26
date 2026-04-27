<!DOCTYPE html>
<html>
    <body>
        <h2> My First PHP Page</h2>
        
        <?php
        
        echo "hello <br>";
        echo'hello <br>';
        $name = "Musfiq";
        echo "Hello $name <br>"; // return Hello Musfiq
        echo 'Hello $name <br><br>'; // return Hello $name because single quoted echo return the string as it is

        echo "String function: <br>";
        echo strlen("Hello world!");
        echo"<br>";
        echo str_word_count("Hello world!");
        echo"<br>";

        $txt = "I really love PHP!";
        echo"<br>";
        var_dump(str_contains($txt, "love"));

        ?>
    </body>
</html>
