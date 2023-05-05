<?php
require __DIR__ . '/Generi.php';

$generi = [
    new Generi('Fantascienza'),
    new Generi('Fantastico'),
    new Generi('Commedia'),
];

$movie_1 = new Movie('Ritorno al futuro', $generi, 9.5);
$movie_2 = new Movie('Harry Potter', $generi, 10);
