<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name="Nahid";
        echo ($name).'<br>';
        $str="Hello world from MIST";
        echo strlen($str).'<br />';

        //=== for comparison with data type and value and == for only value
        //php array
        // $car1="Volvo";
        // $car2="BMW";

        //indexed array
        $cars = array("Volvo","BMW");

        //associative array
        $students =[
            'faisal' => 22,
            'aziz' => 25,
            'nahid' =>01 
        ];

        foreach($students as $name=>$Roll){
            echo "Name:".$name.","."Roll".$Roll.'<br />';
        } 
    ?>
</body>
</html>