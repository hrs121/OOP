
<?php
//Class Code example:
class Car {
  // code goes here...
}

$obj=new Car();//to create object
?>


<?php
//Object Code Example:
class Car {
  // code goes here...
}

$obj=new Car();//to create object
?>

//constructor
<?php
class car{
    function __construct(){
        echo "This is constructor";
    }
}
$BMW=new car();
?>//Output: This is constructor.


//Constructor overloading Code Example:

<?php
class MyClass {
    public $property1;
    public $property2;

    public function __construct($param1, $param2 = null) {
        $this->property1 = $param1;
        $this->property2 = $param2;
    }
}
// Usage
$obj1 = new MyClass('value1');
$obj2 = new MyClass('value1', 'value2');
?>


Destructor Example:

<?php
class car{
    function __construct(){
        echo "This is constructor";
    }

   function __destruct(){
    echo "\nThis is a Destructor and The code is ended.";
   }
}
$BMW=new car();
?>
//This is constructor.
//This is a Destructor and The code is ended.


Access modifier
<?php
class Car {
  public $name;
  protected $color;
  private $numberPlate;
}

$mango = new Car();
$mango->name = 'Sonata'; // OK
$mango->color = 'blue'; // ERROR
$mango->numberPlate = '4523'; // ERROR
?>


Encapsulation Code Example:

<?php
class Car {
    private $model;
    private $color;

    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }

    public function start() {
        echo "The car is starting.\n";
    }
}

// Usage
$myCar = new Car('Toyota', 'Blue');
echo 'Model: ' . $myCar->getModel() . "\n";
echo 'Color: ' . $myCar->getColor() . "\n";
$myCar->start();
?>


Abstract Class Code Example:

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
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


//Interface Code Example:

<?php
interface car{
    public function makeSound();
}

class sound implements car{
    public function makeSound(){
        echo "broom broom";
    }
}
$sound=new sound();
$sound->makeSound();
?>

//Multiple Inheritance Code Example:

<?php
interface Engine {
    public function start();
}

trait HonkTrait {
    public function honk() {
        echo "Honk! Honk!\n";
    }
}

class Car implements Engine {
    use HonkTrait;

    public function start() {
        echo "Car engine started.\n";
    }
}

?>


//Multilevel Inheritance Code Example:

<?php
class Vehicle {
    public function start() {
        echo "Vehicle engine started.\n";
    }
}

class Car extends Vehicle {
    public function honk() {
        echo "Car honk! Honk!\n";
    }
}

class SportsCar extends Car {
    public function accelerate() {
        echo "Sports car accelerating.\n";
    }
}
?>



//Hierarchical Inheritance Code Example:

<?php
class Animal {
    public function eat() {
        echo "Animal is eating.\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog is barking.\n";
    }
}

class Cat extends Animal {
    public function meow() {
        echo "Cat is meowing.\n";
    }
}
?>



<?php
class MathOperations {
    public function add($a, $b) {
        return $a + $b;
    }

    public function addThree($a, $b, $c = 0) {
        return $a + $b + $c;
    }
}

$math = new MathOperations();
echo $math->add(2, 3) . "\n";         // Outputs: 5
echo $math->addThree(2, 3) . "\n";    // Outputs: 5
echo $math->addThree(2, 3, 4) . "\n"; // Outputs: 9
?>



//Function overriding Code Example:

<?php
class Shape {
    public function calculateArea() {
        return 0;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

$circle = new Circle(5);
$square = new Square(4);

echo $circle->calculateArea() . "\n"; // Outputs: 78.5
echo $square->calculateArea() . "\n"; // Outputs: 16


?>

//Trait
<?php
trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>


//Static Method Code Example:

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>

//Static Properties Code Example:

<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>


//Namespace declaration Example:

<?php
namespace Html;
?>


