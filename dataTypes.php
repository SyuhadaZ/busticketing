<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* 
         * Using gettype() function to return the type of the declared variable
         * Also to illustrate PHP variable is loosely-typed
         * In addition, is_<type>() to test a variable type
         */
        
        //integer type
        $value1 = 3;
        echo gettype($value1) . "<br>";
        //echo is_int($value1);
        //echo is_integer($value1);
        
        //string type
        $value1 = "Hello, World!";
        echo gettype($value1);
        echo "<br>";
        //echo is_string($value1);
        
        //floating-point value
        $value1 = 3.28;
        echo gettype($value1) . "<br>";
        //echo is_float($value1);
        //boolean type
        $value1 = true;
        echo gettype($value1);
        echo "<br>";
        //echo is_bool($value1);
        //indexed array
        $value5 = array(1,2,3);
        //echo is_array($value5);
        //named array or associative array
       
        //object
        $value6 = new car();
        //echo is_object($value6);
        //resource
        //$value7 = 
        
        $value8 = null;
        //echo is_null($value8);
        echo gettype($value5) . "<br>";
        echo gettype($value6) . "<br>";
        echo gettype($value8) . "<br>";
        class car{};
        
        
        /*
         * Demonstrating the use of settype() function
         */
//        settype($value1,"string");
//        echo gettype($value1);
//        
//        settype($value1,"integer");
//        echo gettype($value1);
//        
//        settype($value1,"float");
//        echo gettype($value1);
//        
//        settype($value1,"boolean");
//        echo gettype($value1);
//        
//        settype($value1,"array");
//        echo gettype($value1);
//        
//        settype($value1,"object");
//        echo gettype($value1);
//        
//        settype($value1,"null");
//        echo gettype($value1);
        
        
        /*
         * Demonstrating type casting
         */
        $value9 = 8.15;
        
        echo (int)$value9 . "<br>";
        echo (string)$value9 . "<br>";
        echo (float)$value9 . "<br>";
        echo (boolean)$value9 . "<br>";
        $testValue1 = (array)$value9;
        $testValue2 = (object)$value9;
        echo is_array($testValue1);
        echo is_object($testValue2);
        ?>
    </body>
</html>
