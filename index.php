<?php
require __DIR__ . '/Models/Movie.php';

$generi = ['Fantascienza', 'Fantastico', 'Commedia'];

// $movie_1 = new Movie('Ritorno al futuro', 'Fantascienza', 9.5);
// $movie_2 = new Movie('Harry Potter', 'Fantastico', 10);

$movie_1 = new Movie('Ritorno al futuro', $generi, 9.5);
$movie_2 = new Movie('Harry Potter', $generi, 10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <div class="container">
        <h4>
            <p> <?php
                    echo $movie_1->getFullInfo();
                    ?>
            </p>
            <!-- <li> <?php
                    var_dump($movie_1);
                    ?>
            </li> -->
            <p> <?php
                    echo $movie_2->getFullInfo();
                    ?>
            </p>
            <!-- <li> <?php
                    var_dump($movie_2);
                    ?>
            </li> -->
        </h4>
    </div>
</body>

</html>