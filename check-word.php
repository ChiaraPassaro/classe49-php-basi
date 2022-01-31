<?php
// Inserire tante parole all’interno di un array e controllare che la parola passata dall’utente ci sia nell’array.

$words = [
  'lorem',
  'ipsum',
  'dolor',
  'sit'
];


if (empty($_GET['word'])) {
  $message = 'Non hai inserito una parola';
} else {
  $word = $_GET['word'];
  if (in_array($word, $words)) {
    $message = 'Hai inserito la parola ' . $word . '. Ed è presente in array ';
  } else {
    $message = 'Hai inserito la parola ' . $word . '. Non è presente in array ';
  }
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