<?php

//    Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, 
//altrimenti stampare una stringa rossa.
if (empty($_GET['password'])) {
  $message = 'Non hai inserito la password';
} else {
  $pass = $_GET['password'];

  if ($pass === 'Boolean') {
    $class = 'green';
  } else {
    $class = 'red';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <?php if (isset($message)) {
    echo $message;
  } ?>

  <?php if (isset($pass)) { ?>

    <p class="<?php echo $class ?>">
      <?php echo $pass; ?>
    </p>

  <?php } ?>
</body>

</html>