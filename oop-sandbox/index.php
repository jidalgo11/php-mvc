<?php 

class User {
  public $name;
  public $age;

  public function __construct() {
    echo 'constructor ran....<br>';
  }

  public function sayHello() {
    return $this->name . ' say hello!';
  }
}

$user1 = new User();
$user2 = new User();