<?php
class testBankAcc{
    //withdraw,deposit,getbalance,transaction,username,password
    private $balance = 0;

    public function deposit($amount){
        $this->balance += $amount;
       return $this->balance."\n";

        
    }
    public function withdraw($amount){
        if($amount > $this->balance){
            return "Your balance is insufficient."."\n";

        }$this->balance -= $amount;
        return $this->balance."\n";
    }
    public function getBalance(){
       return $this->balance."\n";
    }

}

$bobo = new testBankAcc;
echo "BoBo deposit 100000 =>".$bobo->deposit(100000);
echo "BoBo withdraw 300000 =>".$bobo->withdraw(300000);
echo "BoBo remaining balance is =>".$bobo->getBalance();

$ayeaye = new testBankAcc();
echo "Ayeaye deposit 300000 =>".$ayeaye->deposit(300000);
echo "Ayeaye deposit 200000 =>".$ayeaye->deposit(200000);
echo "Ayeaye withdraw 200000 =>".$ayeaye->withdraw(200000);
echo "Ayeaye remaining balance is =>".$ayeaye->getBalance();

