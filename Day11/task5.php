<?php
class BankAccount {
    public $balance=0 ;
    public function deposit($amount){
        $this->balance+=$amount ;
    }
    public function withd($amount){
        $this->balance-=$amount ;
    }
    public function getbalance(){
       echo  $this->balance ;
    }
}
 $account=new BankAccount () ;
 $account->deposit(5000) ;
 $account->withd(1000) ;
 $account->getbalance () ;
