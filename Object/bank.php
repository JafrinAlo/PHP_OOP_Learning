<?php
class bank
{
    public $accno;
    public $name;
    public $balance;


    function depositAmount($amt)
    {
        //$newbalance = $this->balance + $amt;
        $this->balance=$this->balance+$amt;
       // return $this->balance;
    }

    function deductAmount($amt)
    {
        if($amt>$this->balance){
        echo "Insufficient balance".PHP_EOL;
        return;
        }
        elseif($amt<$this->balance){
            $this->balance = $this->balance - $amt;
           // $this->balance=$newbalance;
        //return $this->balance;
        }
    }
    function checkBalance()
    {
        //$balance=$this->balance;
        echo "your balance $this->balance ".PHP_EOL;
    }
}
$account1 = new bank;
$account1->accno = 111;
$account1->name = "a";
$account1->balance = 1000;
 $account1->depositAmount(100);
 $account1->checkBalance();
$account1->deductAmount(200);
$account1->checkBalance();

$account1->deductAmount(2000);
//$account1->checkBalance();

$account1->deductAmount(800);
$account1->checkBalance();
?>