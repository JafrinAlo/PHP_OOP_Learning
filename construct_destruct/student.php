<?php
//Every class has magic methods which gets called automatically
//constructor are magic method that gets loaded auto when instance of a classs is  created
/*PURPOSE: 
----------initialize the properties of the class to a default value
----------Initialize Database Connection
----------check if the file exists
----------open the file before using it with method
----------check for the internet connection.
----------check API is reachable before the connection
----------Load instance of a class
----------Load mandatory properties to execute the method in the class*/
//you can choose to define constructor method or ignore as it is optional to define.
/*class car{
    public $name;
    function __construct()
    {
        $this->name="";//initialize the properties
        //__contruct() is called automatically when new instance is created and does not return any value.
        //arguments are optional.
    }
}*/

class student{
    public $name="John";
    public $class="1st";

    function __construct()
    {
        $this->name="";//for this name would be initialized as ""---- "John" would be erased
        $this->class="";
        echo "hello this is me, constructor".PHP_EOL;
    }
    function printDetails(){
        echo "$this->name studing in $this->class".PHP_EOL;
    }
}
$student1=new student();//this will invoke the constructor
$student1->printDetails();
?>