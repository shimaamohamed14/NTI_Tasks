<?php
class book {
   public $title ;
   public $name ;
   public function read(){
  echo explode (" ",$this->name)[0] . " read $this->title book now " ;
   }
}
 $book1=new book () ;
 $book1->name ="Shimaa Mohamed" ;
 $book1->title="Progrmming" ;
 $book1->read() ;
?>