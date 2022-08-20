<?php 
class Car{
#variable=Property
#functions=Methods
    public $name;//$name is a property of CAR class
    public $color;
    public $size;
    public $model;
    public $type;
#properties helps to define elements of Class and
#Methods help to perform some action in that class
    function startCar(){}//function is the action of a class

    function sayHello()
    {
        echo "Hello from Car Class".PHP_EOL;
    }
    //this is wrong
    //echo "Hello;"
    
    #only thing we declare in CLASS is a function or/and variables
    #no echo statements
}//class end

$car1=new Car();
//car1 is a object of car class
//car1 is an instance of car class
$car1->name="Ferrari";
$car1->color="Red";
$car1->sayHello();
echo "$car1->name is $car1->color Color".PHP_EOL;

$car2=new Car();
$car2->name="BMW";
$car2->color="Blue";
$car2->sayHello();
echo "$car2->name is $car2->color Color".PHP_EOL;
?>