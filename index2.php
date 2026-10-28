<?php
// Задание 1
$secondInHour = 60;
$secondInDay = 86400;
$secondInWeek = 604800;

echo $secondInHour, $secondInDay, $secondInWeek;


// Задание 2
$x = 60;

echo " Количество секунд в часе: " . $x*$x;
echo " Количество секунд в сутках: " . ($x*$x)*24;
echo " Количество секунд в неделе: " . ($x*$x)*24*7;

$goods = [
  [
    'title' => 'nokia',
    'price' => '100',
    'qty' => '10',
  ],
  [
    'title' => 'sony',
    'price' => '120',
    'qty' => '7',
  ],
  [
    'title' => 'lg',
    'price' => '105',
    'qty' => '15',
  ],
];
$car = [
  'brand' => 'toyota',
  'model' => 'Camry',
  'year' => 2021,
  'speed' => 220,
  'wheels' => 4,
];

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5, ];

echo count($nums).'<br>';

// echo array_count_values($car);

print_r(array_count_values($nums));

array_key_exists()

 ?>