<?php
session_start();

if (!empty($_SESSION['count'])){
  echo "посещений {$_SESSION['count']} раз";
}

if (!empty($_FILES)) {
  if (move_uploaded_file($_FILES['file']['tmp_name'], "upload/{$_FILES['file']['name']}")) {
    echo "OK";
  } else {
    "ERROR";
  }
}
?>


<a href="index.php"> index22 </a>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <button type="submit">Отправить</button>

  </form>
  
</body>
</html>