<?php
session_start();

$_SESSION['test'] = 'test';

var_dump($_SESSION);

echo $_SESSION['test'];

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
$_SESSION['count'] = ++$_SESSION['count'];

// echo $_SESSION['test'];
?>

<a href="index22.php"> index22 </a>

<?php 

function debug($data){
  echo '<pre>' . print_r($data,1).'</pre>';
}

$db = mysqli_connect('localhost', 'root', '', 'KornevaLuftChurinPinigina') or die('Eror connection');
$res = mysqli_query($db, "SELECT * FROM test");
debug(mysqli_fetch_all($res, MYSQLI_ASSOC));