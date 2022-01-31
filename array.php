<?php
$arrayNomi = [
  'Chiara',
  'Luigi',
  'Maria',
  'Michele'
];

$arrayNomi[7] = 'Flavio';
var_dump($arrayNomi);

$datiUtente = [
  'nome' => 'Chiara',
  'cognome' => 'Passaro',
];

$datiUtente['age'] = 41;
$datiUtente[3] = 41;

var_dump($datiUtente);

$arrayMultidimensionale = [
  'cani' => [
    'pippo',
    'pluto',
  ],
  'paperi' => [
    'paperino',
    'paperina',
  ],
];

echo $arrayMultidimensionale['paperi'][0];


$arrayMultidimensionale2 = [
  'classi' => [
    'classe49' => [
      'nomi_studenti' => ['Luca', 'Filadelfio', 'Dario'],
      'insegnanti' => ['Chiara', 'Elisabetta', 'Thomas']
    ],
  ],
];

echo $arrayMultidimensionale2['classi']['classe49']['insegnanti'][2];


echo array_key_exists('classe59', $arrayMultidimensionale2['classi']);
