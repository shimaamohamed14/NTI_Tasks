<?php
abstract class Employee_{
   public  $salary ;
   public $hours ;
 abstract public function calculateSalary ();
 public function __construct($hours) {
 $this->hours = $hours;
    
}
}
class HourlyEmployee extends Employee_ {
      public function calculateSalary (){
        echo "salary = ". $this->salary=$this->hours*100 ;
      }

}
$employee=new HourlyEmployee(8) ;
$employee->calculateSalary();
