<?php
class car{
    public $name="";
    //access properties via methods: 1)Getter methods 
    //                                2)Setter Methods

    //getter methods
    function getName():string{//string is the return type
        return $this->name;
    }

    //setter methods (parameters passed here)
    function setName($name){
        $this->name=$name;//this keyword indicates the class variables
    }
}
$car1=new car();
$car1->setName("BMW");
echo $car1->getName().PHP_EOL;

$car1=new car();
$car1->setName("newww");
echo $car1->getName().PHP_EOL;

$car2=new car();
$car2->setName("Ferrari");
echo $car2->getName().PHP_EOL;
?>