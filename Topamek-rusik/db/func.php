<?php
function debug($data)
{
  echo '<pre>' . print_r($data,1) . '</pre>';
}

function registration(): bool
{
  global $pdo;

  $login = !empty($_POST['login']) ? trim($_POST['login']) : '';
  $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : '';

  if (empty($login) || empty($pass)){
    $_SESSION['errors'] = 'Дурак что ли логин и пароль введи даун';
    return false;
  }

  $res = $pdo->prepare("SELECT COUNT(*) FROM users WHERE login = ?");
  $res->execute([$login]);
  if ($res->fetchColumn()){
    $_SESSION['errors'] = 'Логин есть блять';
    return false;
  }

  $pass = password_hash($pass, PASSWORD_DEFAULT);
  $res = $pdo->prepare("INSERT INTO users (login,pass) VALUES (?,?)");
  if ($res->execute([$login, $pass])) {
    $_SESSION['success'] = 'Успешно регистрация';
    return true;
  } else {
    $_SESSION['errors'] = 'ОШЫбка нахъуй';
    return false;
  }

}


function login():bool
{
  global $pdo;

  $login = !empty($_POST['login']) ? trim($_POST['login']) : '';
  $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : '';

  if (empty($login) || empty($pass)){
    $_SESSION['errors'] = 'Дурак что ли логин и пароль введи даун';
    return false;
  }

  $res = $pdo->prepare("SELECT * FROM users WHERE login = ?");
  $res->execute([$login]);
  if (!$user = $res->fetch()) {
    $_SESSION['errors'] = 'поля логина и пароля неправильные сукааааа ДАЛБАЕБЕЕЕБ';
    return false;
  }
  if (!password_verify($pass, $user['pass'])) {
    $_SESSION['errors'] = 'долбаеб нееверный пароль или логин ввел сука мудак';
    return false;
  } 
  else {
    $_SESSION['success'] = 'Успешног влетел баляяя';
    $_SESSION['user']['name'] = $user['login'];
    $_SESSION['user']['id'] = $user['id'];
    return true;
  }
}





?>