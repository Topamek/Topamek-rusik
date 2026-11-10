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
    $_SESSION['errors'] = 'Дурак что ли логин и пароль введи';
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
    $_SESSION['errors'] = 'ОШЫбка ';
    return false;
  }

}


function login():bool
{
  global $pdo;

  $login = !empty($_POST['login']) ? trim($_POST['login']) : '';
  $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : '';

  if (empty($login) || empty($pass)){
    $_SESSION['errors'] = 'Дурак что ли логин и пароль введи эээээ';
    return false;
  }

  $res = $pdo->prepare("SELECT * FROM users WHERE login = ?");
  $res->execute([$login]);
  if (!$user = $res->fetch()) {
    $_SESSION['errors'] = 'поля логина и пароля неправильные леееее';
    return false;
  }
  if (!password_verify($pass, $user['pass'])) {
    $_SESSION['errors'] = 'нееверный пароль или логин ввел мдэээ';
    return false;
  } 
  else {
    $_SESSION['success'] = 'Успешног влетел';
    $_SESSION['user']['name'] = $user['login'];
    $_SESSION['user']['id'] = $user['id'];
    return true;
  }
}

function save_message() : bool 
{
  global $pdo;

  $message = !empty($_POST['message']) ? trim($_POST['message']) : '';

  if (empty($message)){
    $_SESSION['errors'] = 'ВВедите текст сообщения';
    return false;
  }

  if (!isset($_SESSION['iser']['name'])) {
    $_SESSION['errors'] = 'Блин Вы не авторизованы';
    return false;
  }

  $res = $pdo->prepare("INSERT INTO messages (name, message) VALUES (?,?)");
  if ($res->execute([$_SESSION['iser']['name'], $message])) {
    $_SESSION['success'] = 'Сообщение отправлено';
    return true;
  } else {
    $SESSION['errors'] = 'ошибка не ну ты конечно мдэ';
    return false;
  }
}

function get_message(): array
{
  global $pdo;
  $res = $pdo->query("SELECT * FROM messages");
  return $res->fetchALL();
}





?>