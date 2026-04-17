<!DOCTYPE html>
<html>
    <body>
        <h2> My First PHP Page</h2>
        
        <?php

        // $name = "Musfiq"; //string
        // $age = 23;        //integer
        // $ab = 34.5;       //float
        // $isAdmin= true;   //boolean
        // echo "Name: $name , Age: $age";
        
        // /*Rules for Naming Variables: 
        //     In PHP, all variables start with $
        //     variable name -->
        //         Must start with a letter or underscore _. 
        //         Cannot start with a digit 
        //         Can contain letters, digits, and underscores  
        //         Are case-sensitive ($name ≠ $Name). 
        // */
        


        /*Variable Scope: 
        Local Variables  – Defined inside a function, only accessible there. 
        Global Variables – Defined outside a function, accessible globally with 'global' keyword. 
        Static Variables – Retains value between function calls. 
        */
        $globalVar = "Global"; 
        function test() {
            global $globalVar;

            $localVar ="Local";

            static $staticVar = 5;
            $staticVar--;

            echo "Inside Function:<br>";
            echo $localVar . "<br>";     // Works (local)
            echo $globalVar . "<br>";    // Works (global)
            echo "Static Var: " . $staticVar . "<br><br>";

        } 
        
        test();  
        echo "<br>Outside Function:<br>";
        echo $localVar; // Trying to access local variable outside will cause error
        echo $globalVar; // Works (global)
        
        
        
        ?>
    </body>
</html>
