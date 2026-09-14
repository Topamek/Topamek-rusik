<?php error_reporting (0);
  $title = "php";
  $surname = "p'hp";
  $name = "d'ark\"";

  $var = "test1";
  $Var = "test1";
  var_dump($var);

  define("CONST_1", "value 1");
  echo CONST_1;

  const CONST_2 = "value 2";
  var_dump(CONST_2);

  // define("CONST_1", "new value 1");
  var_dump(get_defined_constants(true));
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $title ?> </title>
</head>
<body>
  <p><?php echo "hello world1"; ?> </p>
  <p><?= "hello world2 {$name}s"; ?> </p>
  <h1> <?= $title ?> </h1>
  <h1> <?= $surname?> </h1>
  <h1> <?= $name?> </h1>
  <?php 

    echo "<p> hello world3 </p>";
    echo "<p> hello world4 </p>";
    // echo "<p> hello world4 </p>";
    
  ?>
</body>
</html>