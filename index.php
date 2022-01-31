<?php
//Controllare che la mail  passata in GET sia ben formata e contenga un punto e una chiocciola. Se è corretta stampare un div che contenga “OK”, altrimenti che contenga “KO”.


//se get mail non e' vuota quindi e' piena
if (empty($_GET['mail']) === false) {
  var_dump($_GET);
  //salviamo il dato in $mail
  $mail = $_GET['mail'];
  if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
    $message = 'ok';
  } else {
    $message = 'ko';
  }
} else {
  $message = 'non hai passato la mail';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php echo $message; ?>
</body>

</html>