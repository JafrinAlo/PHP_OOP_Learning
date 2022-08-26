<?php 
/*$this keyword allows us to access properties and method of same class.
$this indicates instance of this class*/
class student{
    public $name;
    public $class;

    function setName($name){
        $this->name=$name.PHP_EOL;
    }
    function setClass($class){
        $this->class=$class.PHP_EOL;

    }
    
    function getName():string{
        return $this->name;
    }
    function getClass(){
        return $this->class;
    }

    function printDetails(){
        echo "Name is ".$this->name.PHP_EOL;
        echo "Class is ".$this->class.PHP_EOL;
    }
}
$student1=new student();
$student1->setName("Jaf");
$student1->setClass(10);
$student1->printDetails();

$student2=new student();
$student2->setName("Rin");
$student2->setClass(12);
$student2->printDetails();
?>