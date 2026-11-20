<?php 
//1-3 zadanie

// class Employee {
//   private $name;
//   private $salary;
//   private $age;

// public function __construct($name,$salary,$age) {
//     $this->name = $name;
//     $this->salary = $salary;
//     $this->age = $age;
// }

// public function show() {
//   return $this->name;
// }

// }
// $user = new Employee('John', 200, 18);

//4 zadanie

// class Employee {
//   private $name;
//   private $salary;

// public function __construct($name, $salary) {
//   $this->name = $name;
//   $this->salary = $salary;
// }
//   public function getSalary() {
//   return $this->addSign($this->salary);
// }
//   public function addSign($num) {
//   return $num . '$';
//   }
// } 

// 5-10 zadanie

class Employee {
  private $name;
  private $salary;
  private $age;



public function setName($name) {
  $this->name = $name;
}
public function setSalary($salary) {
  $this->salary = $salary;
}
public function setAge($age) {
  if ($age > 0 and $age <120) 
  {
  $this->age = $age;    
  } else {
    echo 'nooooo';
  }

}
public function getName() {
  return $this->name;
}
public function getSalary() {
  return $this->salary . '$';
}
public function getAge() {
  return $this->age;
}


}

$user = new Employee();

$user->setName('John');
$user->setAge(18);
$user->setSalary(200);

var_dump($user->getName());
var_dump($user->getSalary());
var_dump($user->getAge());
?>