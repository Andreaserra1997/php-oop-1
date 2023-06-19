<?php

include __DIR__ . '/db.php';

foreach ($movies as $movie) {
    echo $movie->getMovie();
    echo "<br>";
}