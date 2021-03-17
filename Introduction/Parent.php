<?php
 abstract class ParentClass{
     abstract protected function prefixName($name);
 }
 class ChildClass extends ParentClass{
    public function prefixName($name) {
        if ($name == "John Doe") {
          $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
          $prefix = "Mrs.";
        } else {
          $prefix = "";
        }
        return "{$prefix} {$name}";
      }
 }
 $class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>"; 
echo $class->prefixName("Jane Doe");

?>