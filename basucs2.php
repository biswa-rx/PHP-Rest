<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        This is my first application
        <?php
            echo "Hello world";

            //Variable
            $x = 34;
            $y = 10;
            echo $x;
            echo $y;

            //Operators in PHP

            //Arithmetic operator
            echo "<br>";
            echo "sum";
            echo $x + $y;

            echo "<br>";
            echo "minul";
            echo $x - $y;

            echo "<br>";
            echo "minul";
            echo $x * $y;

            echo "<br>";
            echo "minul";
            echo $x / $y;

            echo "<br>";
            echo "minul";
            echo $x % $y;

            //Assignment operators
            echo "<br>";
            $newVar = $x;
            $newVar += 1;
            echo "the value of new var is ";
            echo $newVar;
            echo "<br>";
            //Comparison Operators
            echo "The value of 1==4 ";
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1=<4 ";
            echo var_dump(1<=4);
            //Increment/Decrement Operators

            $x++;
            $x--;

            //Logical Operators
            echo "<br>";
            $myVar = (false and true);
            echo var_dump($myVar);
            echo "<br>";
            $myVar = (false or true);
            echo var_dump($myVar);
            echo "<br>";
            $myVar = (false xor false);
            echo var_dump($myVar);
            echo "<br>";
            $myVar = (!true);
            echo var_dump($myVar);

        ?>

        <?php
        //data type in php
        //1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object

        define('PI',3.14);//to declare constant

        $var =  "this is a string";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 5.4;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        echo PI;
        echo var_dump(PI);
        ?>
</div>
</body>
</html>