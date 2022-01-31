<?php
// for ($i = 1; $i < 11; $i++) {
//   var_dump($i);
// }


// $words = [
//   'lorem',
//   'ipsum',
//   'dolor',
//   'sit'
// ];

// for ($i = 0; $i < count($words); $i++) {
//   echo '<p>' . $words[$i] . '</p>';
// }

//gira finche qualcosa e piu piccolo di count


// $i = 0;
// while ($i < count($words)) {
//   echo '<p>' . $words[$i] . '</p>';
//   $i++;
// }


// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
//Stampiamo a schermo tutte le partite con questo schema.

// Olimpia Milano - Cantù | 55-60

$partite = [
  [
    'squadre' => [
      'casa' => 'Olimpia Milano',
      'ospite' => 'Cantù',
    ],
    'punteggio' => [
      'casa' => 55,
      'ospite' => 60,
    ]
  ],
  [
    'squadre' => [
      'casa' => 'Caserta',
      'ospite' => 'Venezia',
    ],
    'punteggio' => [
      'casa' => 40,
      'ospite' => 52,
    ]
  ],
  [
    'squadre' => [
      'casa' => 'Bologna',
      'ospite' => 'Brindisi',
    ],
    'punteggio' => [
      'casa' => 33,
      'ospite' => 20,
    ]
  ]
];

// for ($i = 0; $i < count($partite); $i++) {
//   echo '<li>' . $partite[$i]['squadre']['casa'] . '-' .  $partite[$i]['squadre']['ospite'] . '|' . $partite[$i]['punteggio']['casa'] . '-' . $partite[$i]['punteggio']['ospite'] . '</li>';
// }

foreach ($partite as $partita) {
  // var_dump($partita);
  foreach ($partita as $value) {
    var_dump($value);
  }
}

$libri = [
  'Lorem ipsum' => [
    'pagine' => 224,
    'prezzo' => '20€'
  ],
  'Dolor ipsum' => [
    'pagine' => 24,
    'prezzo' => '10€'
  ]
];

foreach ($libri as $key => $libro) {
  if ($key === 'Dolor ipsum') {
    echo $libro['pagine'];
  }
}
