<!DOCTYPE html>
<html>
    <body>
        <h1> Output in PHP </h1>
        
        <?php 
        
        $name = "Musfiq"; 
        echo "Hello, " . $name . "!<br>"; 
        print "Hello, " . $name . "!<br>"; 

        $arr = array(92,95,87,98);
        print_r($arr,);  // print_r() prints arrays or objects (human-readable)

        echo "<br>";
        $price = 99.50; 
        $active = true; 
        var_dump($price); // var_dump() shows type+value (debugging)
        echo "<br>";
        var_dump($active); 

        ?>
    </body>
</html>