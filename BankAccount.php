<?php
//encapsulation
class BankAccount {
    private $balance = 0;
    public function deposit($amount){
        $this->balance += $amount;
    }
    public function withdraw($amount){
        $this->balance -= $amount;
    }
    public function getBalance(){
       return $this->balance;
    }
}

//bobo
$boboAccount = new BankAccount;
//echo $boboAccount->balance;
$boboAccount->deposit(100000);
$boboAccount->deposit(50000);
$boboAccount->deposit(50000);
$boboAccount->withdraw(150000);
echo $boboAccount->getBalance();

//rose
$roseAccount = new BankAccount;
$roseAccount->deposit(80000);
$roseAccount->deposit(70000);
$roseAccount->withdraw(50000);
echo "\n rose balance is ". $roseAccount->getBalance();