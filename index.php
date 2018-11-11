<?php
class Person1
{
    public $personName;
    public $transaction;
    public $balance;
    
    public function __construct($personName,$balance)
    {
        $this->personName=$personName;
        $this->balance=$balance;
    }
    public function sendMoney($person,$amount)
    {
        if($amount>$this->balance)
        {
            echo 'Insuffecient balance';
        }
        else
        {
            $person->receiveMoney($this,$amount);
            $this->balance=$this->balance-$amount;
            $this->transaction=$this->transaction.'<br>'.$amount.' is sent to '.$person->personName;
        }
    }   
    public function receiveMoney($person,$amount)
    {
        $this->balance=$this->balance+$amount;
        $this->transaction=$this->transaction.'<br>'.$person->personName.' sent '.$amount;
    }
    public function transactionHistory()
    {
        echo '<br>transaction history of '.$this->personName.' :'.$this->transaction;
    }
}
class Person2
{
    public $personName;
    public $transaction;
    public $balance;

    public function __construct($personName,$balance)
    {
        $this->personName=$personName;
        $this->balance=$balance;
    }
    public function sendMoney($person,$amount)
    {
        if($amount>$this->balance)
        {
            echo 'Insuffecient balance';
        }
        else
        {
            $person->receiveMoney($this,$amount);
            $this->balance=$this->balance-$amount;
            $this->transaction=$this->transaction.'<br>'.$amount.' is sent to '.$person->personName;
        }
    }
    public function receiveMoney($person,$amount)
    {
        $this->balance=$this->balance+$amount;
        $this->transaction=$this->transaction.'<br>'.$person->personName.' sent '.$amount;
    }
    public function transactionHistory()
    {
        echo '<br>transaction history of '.$this->personName.' :'.$this->transaction;
    }      
}

$p1=new Person1('Nadim',50000);
$p2=new Person2('Shovon',50000);

$p2->sendMoney($p1,500);
$p2->sendMoney($p1,1000);
$p2->sendMoney($p1,1500);
$p2->sendMoney($p1,2000);
$p2->sendMoney($p1,2500);

$p1->sendMoney($p2,600);
$p1->sendMoney($p2,1200);
$p1->sendMoney($p2,1800);
$p1->sendMoney($p2,2400);
$p1->sendMoney($p2,3000);

$p1->transactionHistory();
$p2->transactionHistory();





