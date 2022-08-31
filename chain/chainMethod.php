<?php
class chainMethod{
    public $name;

    function method1()
    {
        echo "Hello from method1".PHP_EOL;
        $this->name="Chain Methods";
        return $this;//returns instance/object of a class
    }
    function method2(){
        echo "Hello from method2.   test ($this->name)".PHP_EOL;
    }
}

$cm=new chainMethod();
//($cm->method1())=$this
$cm->method1()->method2();//this is a chain and must be called in a sequence
//make sure left method is returning $this
//methods can be only executed only from an object

?>