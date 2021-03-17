<?php

interface Animal{
    public function makeSound();
}
class Cat implements Animal{
    public function makeSound(){
        echo "I am a cat and  I meow";
    }
}
class Dog implements Animal{
    public function makeSound(){
        echo " I am a Dog and I bark";
    }
}

$cat =new Cat();
$cat->makeSound();
echo "<br>";
$dog = new Dog();
$dog->makeSound();
echo "<br>";
//Another way to implement using an array
$animals= array($cat, $dog);

foreach($animals as $animal){
    echo $animal->makeSound();
    echo "<br>";
}
?>