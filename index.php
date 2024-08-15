<?php
// class Fruit
// {
//   public $name;
//   public $color;
//   public function __construct($name, $color)
//   {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro()
//   {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit
// {
//   public function message()
//   {
//     echo "Am I a fruit or a berry? ";
//   }
// }
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();

class Greeting 
{
  public static function welcome(){
    echo "Hello World!";
  }

  public static function addNumber($num1 , $num2){
    return $num1 + $num2;

  }
}

Greeting::welcome();
echo Greeting::addNumber(3,4);