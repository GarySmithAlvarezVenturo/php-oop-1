<?php

include __DIR__ . '/classes/movie.php';
include __DIR__ . '/classes/genres.php';
include __DIR__ . '/data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <ul>
        <h1>MOVIES</h1>
        <?php foreach ($movies as $movie) { ?>
            <li><?= $movie->getMovieData() ?></li><?php
                                                } ?>
    </ul>

</body>

</html>