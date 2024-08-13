<?php
//defined custom class


class Fruit{

  //Property
    public $name;
    public $color;

  //Method
  public function set_name($name){
    $this->name = $name;
    
  }

  public function set_color($color){
    $this->color = $color;
  }

  public function get_name(){
    return $this->name;
  }
}

//defined the object

$apple = new Fruit();
$apple -> set_name("Apple");
$apple -> set_color("red");

$banana = new Fruit();
$banana->set_name("Banana");

//Result
echo $banana->get_name();
echo "<br/>" ;
echo $apple->get_name();
echo $red->get_color();