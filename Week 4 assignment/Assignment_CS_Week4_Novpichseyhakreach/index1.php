<html>
<head></head>
<body>
<?php

echo '<h1>Explain the advantage and disadvantage of multiple inheritance. Write a PHP program to demonstrate that</h1>';

echo '<h2>Answer :The advantage of using multiple inheritance is to  minimize the amount of duplicate code in an application by sharing common  code amongst several subclasses and it can also make apllication code more flexible to change.</h2>';
echo '<h2>Answer :The disadvantage of using multiple inheritance is cost alot of times for the program to load through all the levels of overloaded classes.Moreover, it can make 2 or more classes can not be used independently. </h2>';
echo'<h1>Example PHP inheritance:</h1>';

class Car {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The car is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class bugatti extends Car {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The car is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} kilogram.";
    }
  }
  
  $bugatti = new Bugatti("Bugatti", "red", 1500);
  $bugatti->intro();
?>
<a class="2" href="index2.php"><h3>Go to the second question here.</h3></a>
</body>
</html>