<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <h1>Lets learn about PHP </h1>
        <p>Your party status is here:<p>
            <?php
            $age = 2;
            if($age >= 18){
                echo "You can go to party";
            }
            else if($age < 7){
                echo "small child";   
            }else{
                echo "You can not go to party";
            }

            echo "<br>";
            $languages = array("Python","C++","Java","Javascript");
            echo "<br>";
            echo count($languages);
            echo "<br>";
            echo var_dump($languages);
            echo "<br>";
            echo $languages[1];
            echo "<br>";
            
            //Loops in PHP
            $a = 0;
            while ($a <= 10) {
                
                echo "<br>The value of a is ";
                echo $a;
                echo "<br>";
                $a++;
            }
            
            $a = 0;
            echo "<br>";
            while ($a < count($languages)) {
                echo $languages[$a];
                echo "<br>";
                $a++;
            }

            // do {
            //     # code...
            // } while ($a <= 10);

            // for ($i=0; $i < ; $i++) { 
            //     # code...
            // }

            foreach ($languages as $value) {
                echo "<br> The value from foreach loop is ";
                echo $value;
            }
            
            print5();
            function print5(){
                echo "<br>FIVE";
            }

            print_number(100);
            function print_number($number){
                echo "<br> your number is ";
                echo $number;
            }
            ?>


    </div>
</body>
</html>