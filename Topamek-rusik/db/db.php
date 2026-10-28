<?php 

$host = 'localhost';
$db = 'kornevaluftchurinpinigina';
$user = 'root';
$pass = '';
$charset = 'utf8';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// $pdo = new PDO($dsn, $user, $pass);

$options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $user, $pass, $options);



