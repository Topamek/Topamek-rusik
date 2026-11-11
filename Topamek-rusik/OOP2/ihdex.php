<?php
class Validator {
    // Задание 2 
    public function isEmail($str) {
        return filter_var($str, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Задание 3
    public function isDomain($str) {
        return (bool) preg_match('/^([a-z0-9-]+\.)+[a-z]{2,}$/i', $str);
    }

    // Задание 4
    public function isNumber($str) {
        return (bool) preg_match('/^\d+$/', $str);
    }
}

$hmam = new Validator();
var_dump($hmam->isEmail('test@mail.ru'));   
var_dump($hmam->isDomain('example.com'));   
var_dump($hmam->isNumber('12345'));         
var_dump($hmam->isNumber('12a45'));      


// Задание 5
class City {
    public $name;
    public $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }
}

// Задание 6
$cities = [
    new City('Москва', 12602300),
    new City('СПБ', 50045600),
    new City('Тюмень', 599900),
    new City('Мегион', 11000),
    new City('Сургут', 0),
];

// Задание 7
foreach ($cities as $city) {
    echo $city->name . '-' . $city->population . '<br>';
}



class Position {
    public $name;
    public function __construct($name) { $this->name = $name; }
}

class Department {
    public $name;
    public function __construct($name) { $this->name = $name; }
}

// Задание 8
class Employee {
    public $name;
    public $position;
    public $department;

    public function __construct($name, Position $position, Department $department) {
        $this->name = $name;
        $this->position = $position;
        $this->department = $department;
    }
}

// Задание 9
$employee = new Employee('Андрей', new Position('Лох'), new Department('ТКТТС'));

// Задание 10
echo $employee->name . '-' . $employee->position->name . '-' . $employee->department->name;

// Задание 11
class Employee2 {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}

$employee = new Employee2('Ярик', 1000);

echo $employee?->name;
echo $employee?->salary;

// 12 задание
class Employee3 {
    public $name;
    public $position;

    public function __construct($name, $position) {
        $this->name = $name;
        $this->position = $position;
    }
}

class Position3 {
    private $name;

    public function __construct($name) { $this->name = $name; }
    public function getName() { return $this->name; }
}

$position = new Position3('Ярик');
$employee = new Employee3('Ярик', $position);


echo $employee?->position?->getName();

// задание 13
class Employee4 {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() { return $this->name; }
    public function getSalary() { return $this->salary; }
}

class EmployeesCollection {
    private $employees;

    public function __construct() {
        $this->employees = [];
    }

    // Задание 14
    public function add(Employee4 $employee) {
        $this->employees[] = $employee;
    }

    // Задание 15
    public function show() {
        foreach ($this->employees as $e) {
            echo $e->getName() . '-' . $e->getSalary() . '<br>';
        }
    }

    // Задание 16
    public function getTotalSalary() {
        $sum = 0;
        foreach ($this->employees as $e) {
            $sum += $e->getSalary();
        }
        return $sum;
    }

    // Задание 17
    public function getAvgSalary() {
        $count = count($this->employees);
        if ($count === 0) return 0;
        return $this->getTotalSalary() / $count;
    }
}

// Проверка
$collection = new EmployeesCollection();
$collection->add(new Employee4('Маша', 100));
$collection->add(new Employee4('Катя', 2000000));
$collection->add(new Employee4('Стас', 30000000));

$collection->show();
echo 'Вся зарплата ' . $collection->getTotalSalary() . '<br>';
echo 'Средняя зарплата ' . $collection->getAvgSalary() . '<br>';
?>



