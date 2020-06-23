<?php
$error = false;
$object = '';
$name = '';
$phone = '';
$email = '';
$comment = '';
$location = '';
$from = '';

//Город и область посетителя
define('DS', DIRECTORY_SEPARATOR);
define('D_ROOT', getenv('DOCUMENT_ROOT'));
include D_ROOT . DS . 'detect.php';
$place[0] = occurrenceCity();
$place[1] = occurrenceRegion();

//ip посетителя
$ip = getIp();

//taking info about date
$timestamp = date('Y-m-d H:i:s');

//taking the data from form
$location = htmlspecialchars(trim($_POST['location']), ENT_QUOTES);

if ($location == '[alumostroy.ru] Форма вызова замерщика') {
  if (!empty($_POST['object'])) {
    $object = htmlspecialchars(trim($_POST['object']), ENT_QUOTES);
    if (empty($object)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  if (!empty($_POST['phone'])) {
    $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES);
    if (empty($phone)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  $content =
    "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'" .
    "<tr style='background: #eee;'><td><strong>Вид конструкции:</strong> </td><td>" .
    $object .
    "</td></tr>\n\n" .
    '<tr><td><strong>Телефон посетителя:</strong> </td><td>' .
    $phone .
    "</td></tr>\n\n" .
    '<tr><td><strong>Время заявки:</strong> </td><td>' .
    $timestamp .
    '</td></tr>' .
    '<tr><td><strong>IP посетителя:</strong> </td><td>' .
    $ip .
    "</td></tr>\n\n" .
    '<tr><td><strong>Область посетителя:</strong> </td><td>' .
    $place[1] .
    "</td></tr>\n\n" .
    '<tr><td><strong>Город посетителя:</strong> </td><td>' .
    $place[0] .
    "</td></tr>\n\n" .
    "</table></body></html>\n\n";
} elseif ($location == '[alumostroy.ru] Форма заявки на подробный расчет') {
  if (!empty($_POST['comment'])) {
    $comment = htmlspecialchars(trim($_POST['comment']), ENT_QUOTES);
    if (empty($comment)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  if (!empty($_POST['phone'])) {
    $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES);
    if (empty($phone)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  $content =
    "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'" .
    "<tr style='background: #eee;'><td><strong>Комментарий посетителя:</strong> </td><td>" .
    $comment .
    "</td></tr>\n\n" .
    '<tr><td><strong>Телефон посетителя:</strong> </td><td>' .
    $phone .
    "</td></tr>\n\n" .
    '<tr><td><strong>Время заявки:</strong> </td><td>' .
    $timestamp .
    '</td></tr>' .
    '<tr><td><strong>IP посетителя:</strong> </td><td>' .
    $ip .
    "</td></tr>\n\n" .
    '<tr><td><strong>Область посетителя:</strong> </td><td>' .
    $place[1] .
    "</td></tr>\n\n" .
    '<tr><td><strong>Город посетителя:</strong> </td><td>' .
    $place[0] .
    "</td></tr>\n\n" .
    "</table></body></html>\n\n";
} elseif ($location == '[alumostroy.ru] Форма обратной связи') {
  if (!empty($_POST['comment'])) {
    $comment = htmlspecialchars(trim($_POST['comment']), ENT_QUOTES);
    if (empty($comment)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  if (!empty($_POST['email'])) {
    $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES);
    if (empty($email)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  $content =
    "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'" .
    "<tr style='background: #eee;'><td><strong>Комментарий посетителя:</strong> </td><td>" .
    $comment .
    "</td></tr>\n\n" .
    '<tr><td><strong>E-mail посетителя:</strong> </td><td>' .
    $email .
    "</td></tr>\n\n" .
    '<tr><td><strong>Время заявки:</strong> </td><td>' .
    $timestamp .
    '</td></tr>' .
    '<tr><td><strong>IP посетителя:</strong> </td><td>' .
    $ip .
    "</td></tr>\n\n" .
    '<tr><td><strong>Область посетителя:</strong> </td><td>' .
    $place[1] .
    "</td></tr>\n\n" .
    '<tr><td><strong>Город посетителя:</strong> </td><td>' .
    $place[0] .
    "</td></tr>\n\n" .
    "</table></body></html>\n\n";
} elseif ($location == '[alumostroy.ru] Форма заказа звонка') {
  if (!empty($_POST['name'])) {
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES);
    if (empty($name)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  if (!empty($_POST['phone'])) {
    $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES);
    if (empty($phone)) {
      $error = true;
    }
  } else {
    $error = true;
  }
  $content =
    "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'" .
    "<tr style='background: #eee;'><td><strong>Имя посетителя:</strong> </td><td>" .
    $name .
    "</td></tr>\n\n" .
    '<tr><td><strong>Телефон посетителя:</strong> </td><td>' .
    $phone .
    "</td></tr>\n\n" .
    '<tr><td><strong>Время заявки:</strong> </td><td>' .
    $timestamp .
    '</td></tr>' .
    '<tr><td><strong>IP посетителя:</strong> </td><td>' .
    $ip .
    "</td></tr>\n\n" .
    '<tr><td><strong>Область посетителя:</strong> </td><td>' .
    $place[1] .
    "</td></tr>\n\n" .
    '<tr><td><strong>Город посетителя:</strong> </td><td>' .
    $place[0] .
    "</td></tr>\n\n" .
    "</table></body></html>\n\n";
} else {
  if (!empty($_POST['phone'])) {
    $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES);
    if (empty($phone) && empty($email)) {
      $error = true;
    }
  } else {
    if (empty($email)) {
      $error = true;
    }
  }
  $content =
    "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'" .
    "<tr style='background: #eee;'><td><strong>Телефон посетителя:</strong> </td><td>" .
    $phone .
    "</td></tr>\n\n" .
    '<tr><td><strong>Время заявки:</strong> </td><td>' .
    $timestamp .
    '</td></tr>' .
    '<tr><td><strong>IP посетителя:</strong> </td><td>' .
    $ip .
    "</td></tr>\n\n" .
    '<tr><td><strong>Область посетителя:</strong> </td><td>' .
    $place[1] .
    "</td></tr>\n\n" .
    '<tr><td><strong>Город посетителя:</strong> </td><td>' .
    $place[0] .
    "</td></tr>\n\n" .
    "</table></body></html>\n\n";
}

//preparing mail
if (!$error) {
  $headers = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=utf-8\n";
  $headers .= "Content-Transfer-Encoding: quoted-printable\n";

  $from = '[alumostroy.ru]';
  $from = '=?utf-8?B?' . base64_encode($from) . '?=';

  $headers .= 'From: ' . $from . " <info@alumostroy.ru>\n";

  $location = '=?utf-8?B?' . base64_encode($location) . '?=';

  mail('info@alumostroy.ru', $location, $content, $headers);
  mail('pashachiho@gmail.com', $location, $content, $headers);
  mail('alumo88@mail.ru', $location, $content, $headers);

  //redirect to thank-you.html page.
  header('location:./thanks');
  die();
} else {
  echo '<h1>Включите javascript в браузере и заполните, пожалуйста, все поля!</h1>';
}
?>
