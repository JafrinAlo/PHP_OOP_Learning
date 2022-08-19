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
        //dynamic text
        $name= "Jafrin";
        $roll= 35;
        echo $roll." ".$name;
        $name= "<h1> Hello</h1>";
        echo $name;


        //array
        $numberList=
        array(23, 4, 223,444,'223',22,1,'<h1>flower</h1>');//still used
        //$numberList=[23,23,3,4];

        //Associative array, here we are giving name to the index
        $names=["name"=>'Alo',"nickname"=>'pp'];//newer and used frequently
        echo "<br>";
        echo $names['name'] ." ". $names['nickname'];
        echo "<br>";
        print_r($numberList);
        
        echo "<br>";
        $number1=10;
        $number2=20;
        echo $number1+$number2;

        echo "<br>";
        $simple_array=array(15,35);
        print_r($simple_array);

        echo "<br>";
        $associative_array=["manarat"=>15,"bup"=>35];
        print_r($associative_array);
        echo "manarat roll from simple array $simple_array[0]"." ".
        " bup roll from associative array" .$associative_array['bup'];


    ?>
</body>
</html>

