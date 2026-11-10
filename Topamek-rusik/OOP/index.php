<?php 
require_once 'classes/CarClass.php';

function debug($data) {
  echo '<pre>' . print_r($data,1) . '<pre>';
}
$car =new CarClass('black',4,1800,'bmw');
$car2 =new CarClass('white',4,200,'opel');
// $car3 = new CarClass('pink',4,150,'volvo');
debug($car);
debug($car2);
// debug($car3);
echo $car->getCarInfo();
echo $car2->getCarInfo();

// $car->colors = 'black';
// $car->brand = 'bmw';
// $car->speed = 400;
// $car->year = 1999;
// $car->colour = 'red';

// debug($car);

// $car2 = new CarClass();

// $car2->colors = 'white';
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