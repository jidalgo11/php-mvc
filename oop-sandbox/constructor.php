<?php 
include('header.php');

class User {
  public $name;
  public $age;

  // Runs when an object is created/instantiated
  public function __construct($name, $age) {
    echo 'Class ' . __CLASS__ .' ' . $name . ' instantiated<br>';
    $this->name = $name;
    $this->age = $age;
  }

  public function sayHello() {
    return $this->name . ' say hello!';
  }

  // Called when no other references to a certain object 
  // Used for cleanup, closing connections, etc.
  public function __destruct() {
    echo 'destructor ran...';
  }
}

$user1 = new User('Daniel', 33);
$user2 = new User('Nicole', 23);

echo $user1->name . ' is ' . $user1->age . ' years old<br>';
echo $user2->name . ' is ' . $user2->age . ' years old<br>';
