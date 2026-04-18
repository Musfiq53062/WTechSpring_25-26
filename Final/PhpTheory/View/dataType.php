<!DOCTYPE html>
<html>
    <body>
        <h2> Data Types in PHP </h2>
        
        <?php

        $name = "Musfiq";
        $age = 23;
        $float = 43.56;
        $boolean = true;
        $arr = array(1,2,3,4);
        $nullVar = NULL;
        
        class TestClass {}
        $obj = new TestClass();

        function checkType ($var){
            if(is_string($var)){
                echo "String<br>";
            }
            elseif(is_bool($var)){
                echo "Boolean<br>";
            }
            elseif(is_float($var)){
                echo "Float<br>";
            }
            elseif(is_array($var)){
                echo "Array<br>";
            }
            elseif(is_null($var)){
                echo "Null<br>";
            }
            elseif(is_object($var)){
                echo "Object<br>";
            }
            elseif(is_int($var)){
                echo "Integer<br>";
            }
            else{
                echo "Unknown<br>";
            }
        }

        checkType($name);
        checkType($age);
        checkType($float);
        checkType($boolean);
        checkType($arr);
        checkType($nullVar);
        checkType($obj);


        ?>
    </body>
</html>
