<?php

function debug($data)
{
  echo '<pre>' . print_r($data,1) . '</pre>';
}

$db = mysqli_connect('localhost', 'root', '', 'KornevaLuftChurinPinigina') or die('Error connection');

$res = mysqli_query($db, "SELECT * FROM test");

while ($row = mysqli_fetch_assoc($res)){
  echo "Имя: {$row['name']} / Возраст: {$row['age']} <br>";
}

//$name = 'Сидоров';
//$age = 22;
//mysqli_query($db, "INSERT INTO test (name, age) VALUES ('$name', '$age')");

//mysqli_query($db, "DELETE FROM test WHERE id = 1");

//ЗАДАНИЕ 1

//$res = mysqli_query($db, "SELECT * FROM test");
//$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);

//echo "<table border='1' cellpadding='5' cellpadding='0'>";
//echo "<tr><th>id</th><th>Имя</th><th>Возраст</th></tr>";

//foreach ($rows as $row) {
 // echo "<tr>";
 // echo "<td>" . $row['id'] . "</td>";
 // echo "<td>" . $row['name'] . "</td>";
 //echo "<td>" . $row['age'] . "</td>";
 // echo "</tr>";
//}

//echo "</table>";

//$res = mysqli_query($db, "SELECT * FROM test");
//$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);

//echo "<table border='1' cellpadding='5' cellpadding='0'>";
//echo "<tr><th>id</th><th>Имя</th><th>Возраст</th></tr>";

//for ($rows as $row) {
 // echo "<tr>";
 // echo "<td>" . $row['id'] . "</td>";
 // echo "<td>" . $row['name'] . "</td>";
 //echo "<td>" . $row['age'] . "</td>";
 // echo "</tr>";
//}

//echo "</table>";

//ЗАДАНИЕ 2

//$res = mysqli_query($db, "SELECT * FROM test");
//$total_rows = mysqli_num_rows($res);
//echo "количество записей; " . $total_rows . "<br>";

//ЗАДАНИЕ 3

//$avg_res = mysqli_query($db, "SELECT AVG(age) AS avg_age FROM test");
//$avg_row = mysqli_fetch_assoc($avg_res);
//echo "Средний возраст: " . round($avg_row['avg_age'], 1) . "<br>";


