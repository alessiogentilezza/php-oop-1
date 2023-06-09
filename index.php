<?php
require_once __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="css/style.css" />

</head>

<body class="ms-black">
    <div class="container">
        <h4>
            <li> <?php
                    echo $movie_1->getFullInfo();
                    ?>
            </li>
    <!-- 
                <li> <?php
                        var_dump($movie_1);
                        ?>
            </li> 
    -->
            <br>
            <li> <?php
                    echo $movie_2->getFullInfo();
                    ?>
            </li>
    <!-- 
                <li> <?php
                        var_dump($movie_2);
                        ?>
            </li> 
    -->
        </h4>
    </div>
</body>

</html>