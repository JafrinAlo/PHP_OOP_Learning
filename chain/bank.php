<?php
class bank
{
    public $accno;
    public $name;
    public $balance=0;

    function __construct($accno,$name)
    {
        $this->accno=$accno;
        $this->name=$name;
    }
    function depositAmount($amt)
    {
        //$newbalance = $this->balance + $amt;
        $this->balance=$this->balance+$amt;
        return $this;
    }

    function deductAmount($amt)
    {
        if($amt>$this->balance){
        echo "Insufficient balance".PHP_EOL;
        return $this;
        }
        elseif($amt<=$this->balance){
            $this->balance = $this->balance - $amt;
           // $this->balance=$newbalance;
        return $this;
        }
    }
    function checkBalance()
    {
        //$balance=$this->balance;
        echo "your balance $this->balance ".PHP_EOL;
    }
}
$account1 = new bank(111,"a");
 $account1->depositAmount(1000)->checkBalance();
 //$account1->checkBalance();
$account1->deductAmount(200)->checkBalance();
//$account1->checkBalance();

$account1->deductAmount(2000)->checkBalance();
//$account1->checkBalance();

$account1->deductAmount(800)->checkBalance();
?>