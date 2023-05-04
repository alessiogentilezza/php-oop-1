<?php
require __DIR__ . '/Generi.php';

// $generi = ['Fantascienza - ', 'Fantastico - ', 'Commedia']; // SOLUZIONE CON ARRAY SENZA UTILIZZARE UNA NUOVA CLASSE

$generi = [
    new Generi('Fantascienza', 'Fantastico', 'Commedia'),
];

// $movie_1 = new Movie('Ritorno al futuro', 'Fantascienza', 9.5);
// $movie_2 = new Movie('Harry Potter', 'Fantastico', 10);

$movie_1 = new Movie('Ritorno al futuro', $generi, 9.5);
$movie_2 = new Movie('Harry Potter', $generi, 10);
