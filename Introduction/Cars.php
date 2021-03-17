<?php

class Cars{
    // Properties
  public $model;
  public $color;
  public $number;
  


  // Methods
//   model Methods
  function set_model($model) {
    $this -> model = $model;
    
  }
  function get_model() {
    return $this -> model;
  }

// Color Methods
  function set_color($color){
      $this -> color= $color;
  }
  function get_color(){
      return $this-> color;
  }

  // Number Methods
  function set_number($number){
    $this -> number= $number;
  }
  function get_number(){
    return $this-> number;
  }

  
}

$lamborghini= new Cars();
$lamborghini-> set_model('Lamborghini Countach');
$lamborghini->set_color('Black');
$lamborghini->set_number('HTTPS 200');

echo "He bought a car of model ", $lamborghini-> get_model() , " which is ", $lamborghini->get_color() , " in color, and registration number  ", $lamborghini->get_number(), " and that is OK for me" 

?>