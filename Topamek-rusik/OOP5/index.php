<?php

//zadania 1 and 3
// abstract class Fiqure {
//     abstract public function ploshad($value);
// }

// class mickhail_krug extends Fiqure {
// }
// class rectangle extends Fiqure {
// }
// class square extends Fiqure {
// }

//zadania 2
// abstract class User {
//   private $name;
//   public function getName()
//   {
//     return $this->name;
//   }
//   public function setName($name)
//   {
//     $this->name = $name;
//   }

//   abstract public function increaseRevenue($value);
// }

// class Employy extends User {
//   private $salary;

//   public function getSalary()
//   {
//     return $this->salary;
//   }
//   public function setName($salary)
//   {
//     $this->salary = $salary;
//   }

//     public function increaseRevenue($value)
//     {
//         $this->salary = $this->salary + $value;
//     }

// }
// class Student extends User {
//   private $schoolarship;

//   public function getSchoolarship()
//   {
//     return $this->schoolarship;
//   }
//   public function setSchoolarship($schoolarship)
//   {
//     $this->schoolarship = $schoolarship;
//   }

//       public function increaseRevenue($value)
//     {
//         $this->schoolarship = $this->schoolarship + $value;
//     }

// }

//zadania 4
// abstract class Shape
// {
//     abstract public function getArea();
//     abstract public function getPerimeter();
// }

// class Rectangle extends Shape
// {
//     public $width;
//     public $height;

//     public function __construct($width, $height)
//     {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function getArea()
//     {
//         return $this->width * $this->height;
//     }

//     public function getPerimeter()
//     {
//         return 2 * ($this->width + $this->height);
//     }
// }

// class Circle extends Shape
// {
//     public $radius;

//     public function __construct($radius)
//     {
//         $this->radius = $radius;
//     }

//     public function getArea()
//     {
//         return pi() * $this->radius * $this->radius;
//     }

//     public function getPerimeter()
//     {
//         return 2 * pi() * $this->radius;
//     }
// }

//zadania 5

// abstract class Vehicle
// {

// }