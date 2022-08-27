<?php
//Initialize the properties with constructor
class student2{
    public $name;
    public $class;
    
    function __construct($name, $class)
    {
        $this->name=$name;
        $this->class=$class;
    }
    function printDetails(){
        echo "$this->name is studying in $this->class".PHP_EOL;
    }
}
/*$student=new student2();
$student->name="John";
$student->class="1st";
$student->printDetails();*/

//Recommended way:
$student1=new student2("Alia","2nd");
$student1->printDetails();
?>