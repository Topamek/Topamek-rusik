<?php 
require_once 'classes/CarClass.php';

function debug($data) {
  echo '<pre>' . print_r($data,1) . '<pre>';
}
echo CarClass::$count;
$car = new CarClass('черный',4,1800,'bmw');
echo CarClass::$count;
$car2 = new CarClass('черный',1,200,'Granta');
echo CarClass::$count;

echo CarClass::getCount();
echo CarClass::CAR_SPEED;
// $car3 = new CarClass('pink',4,150,'volvo');

debug($car);
debug($car2);
// debug($car3);
echo $car->getCarInfo();
echo $car2->getCarInfo();

// $car->colors = 'черный';
// $car->brand = 'bmw';
// $car->speed = 400;
// $car->year = 1999;
// $car->colour = 'red';

// debug($car);

// $car2 = new CarClass();

// $car2->colors = 'белый';
// $car2->brand = 'opel';
// $car2->speed = 200;
// $car2->colour = 'red';

// debug($car2);

// echo "<h3> Авто: </h3>
//     Марка: {$car->brand} <br>
//     Цвет: {$car->colors} <br>
//     Марка: {$car->wheels} <br>
// ";
// echo "<h3> Авто: </h3>
//     Марка: {$car2->brand} <br>
//     Цвет: {$car2->colors} <br>
//     Марка: {$car2->wheels} <br>
// ";

// echo $car->getCarInfo();
// echo $car2->getCarInfo();
?>