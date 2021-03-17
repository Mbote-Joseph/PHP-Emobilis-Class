<?php
 class Fruit{
     public $name;
     public $size;
     public $price;
     const Notice="All Fruits are of good Quality <br>";
     const goodbye= "THANK YOU FOR VISITING OUR SITE <br><br><hr>";
     function __construct($name, $size, $price){
        $this->name=$name;
        $this->size=$size;
        $this->price=$price;
     }
     function __destruct(){
         echo "{$this->name} is of the size {$this->size} and it costs $this->price  dollars . <br>";
     }
 }
 class Strawberry extends Fruit{
    public function name(){
        echo " I am the sweetest flavor <br>";
        echo SELF::Notice;
    }
 }
 echo Fruit::goodbye;
 $apple= new Fruit("Apple", "2 kgs" , 15);
 $mango= new Fruit("Mango", "5kg", 10);
 
 $strawberry= new Strawberry("Strawberry","2 kg" , 20);
 $strawberry->name();
 

 
  
?>