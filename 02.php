<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tuto</title>

</head>

<body>
    <div class="sem">
        <h1>Learning php</h1>
        <br>
        <?php
        //array

        $lan = array("Python", "c", "c++", "NodeJS");
        //    echo count($lan);

        //loop
        $a = 0;
        while ($a <= 10) {
            echo "<br> This value a is : ";
            echo $a;
            $a++;
        }
        // iteration array in php using while loop
        // $a=0; 
        // while ($a < count ($lan)) {
        //     echo "<br> This value of language : ";
        //     echo $lan[$a];
        //     $a++;
        // }
        // Do-while loop
        $a = 220;
        do {
            echo "<br> This value a is : ";
            echo $a;
            $a++;
        } while ($a < 10);

        // for loop
        //  for ($a=0; $a < 10; $a++) { 
        //     echo "<br> This value a is : ";
        //     echo $a;
        //  }
        //for each loop
        echo "<br>";
        for ($i = 0; $i <= 10; $i++) {

            for ($j = 10 - $i; $j >= 1; $j--) {

                echo "* ";
            }
            echo "<br>";
        }

        foreach ($lan as $val ) {
           echo " <br> language is ";
           echo $val;
        }

        //function 
        function aadi(){
            echo"5";
        }
        aadi();
        
        ?>
    </div>
</body>

</html>