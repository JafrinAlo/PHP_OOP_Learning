<?php

class employee
{
    public $id;
    public $name;
    public $workingHourPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function __construct($id,$name,$totalLeaveTaken)
    {
        $this->id=$id;
        $this->name=$name;
        $this->totalLeaveTaken=$totalLeaveTaken;
    }

    function getSalaryAmount($totalDays): int
    {
        //$this used to access class properties
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHourPerDay
            * $this->hourlyRate;
        return $salary;
    }
}

$emp1 = new Employee(101,"Jaf",4);
/*$emp1->id = 101;
$emp1->name = "Hayy";
$emp1->totalLeaveTaken = 4;*/
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worked for $emp1->workingDays
leave taken $emp1->totalLeaveTaken so salary $salary
" . PHP_EOL;

$emp1 = new Employee(102,"Rin",5);
/*$emp1->id = 101;
$emp1->name = "Hayy";
$emp1->totalLeaveTaken = 4;*/
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worked for $emp1->workingDays
leave taken $emp1->totalLeaveTaken so salary $salary
" . PHP_EOL;
?>