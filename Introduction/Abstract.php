<?php

abstract class Car{
    public $name;
    public function __construct($name){
     $this->name=$name;       
    }
    abstract function intro(): string;
    
}
 class Audi extends Car{
     public function intro(): string{
         return "This car is from Japan , Model $this->name";
     }
 }
 class Toyota extends Car{
     public function intro(): string{
        return " This is car is from China, Model $this->name";
     }
 }

 $audi= new Audi('Audi');
 echo $audi->intro();
echo "<br>";
 $toyota= new Toyota('Toyota');
 echo $toyota->intro();


?>