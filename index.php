<?php

require_once __DIR__ . '/twig.php';

echo $twig->render('index.html.twig', [
  'name' => 'Luke',
  'planets' => [
    'Tatooine',
    'Alderaan',
    'Yavin IV',
    'Hoth',
    'Dagobah',
    'Bespin',
    'Endor',
    'Naboo',
    'Coruscant',
    'Kamino'
  ],
  'isDarkSide' => [
    'Luke' => false,
    'Dark Vador' => true,
    'Yoda' => false
  ]
]);
