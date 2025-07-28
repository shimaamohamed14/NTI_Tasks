<?php
class Vehicle {
    protected $model ;
    protected $make ;
    public function  __construct ($model,$make){
     $this->model=$model;
      $this->model=$model;

    }
    protected function info() {
    echo "model: $this->model <br>make: $this->make";
    }
}
class Car extends Vehicle {
    public $fuelType ;
     public function  __construct ($model,$make,$fuelType){
     $this->model=$model;
      $this->make=$make;
      $this->fuelType=$fuelType;

    }
   
 public function info() {
    echo "model: $this->model <br>make: $this->make <br>type: $this->fuelType";
    }

}
$vehicle =new Vehicle (2025,"ahmed") ;
$car =new Car (2025,"ahmed","gyhik") ;
$car ->info() ; 
?>