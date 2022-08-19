<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control structure</title>
</head>
<body>
   <?php

    //for each loop
    $numbers=array(1,2,3,4,5);
    foreach($numbers as $number){
        echo $number. "<br>";
    }

   /*for($counter=0;$counter<5;$counter++){
    echo "hello "."$counter"."<br>";
   

   }*/

  /* $counter=0;
   while($counter<10){
    echo "hello "."$counter"."<br>";
    $counter++;

   }*/

   /*$number =10;
   switch($number){
       case 34:
        echo "it is 34";
       case 10:
        echo "it is 10";
        break;
       case 37:
        echo "it is 37";
   }*/
   
   
   ?> 
</body>
</html>