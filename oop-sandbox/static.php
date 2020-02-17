<?php 

class User {
  public $name;
  public $age;
  public static $minPassLength = 8;

  public static function validatePass($pass) {
    if(strlen($pass) >= self::$minPassLength) {
      return true;
    } else {
      return false;
    }
  }
}

$password = '12345678';
if (User::validatePass($password)) {
  echo "Password valid!";
} else {
  echo "Password invalid!";
}