<?php
class Employee{
    public $name ;
    protected $salary=6000 ;
    private $bonus=500;
    public function salary(){
        $this->salary +$this->bonus ;
    }
    public function get(){
    echo "name: $this->name <br>salary : $this->salary <br>bonus: $this->bonus " ;
    }
}
$employee =new Employee() ;
$employee ->name="shimaa" ;
$employee ->get() ;