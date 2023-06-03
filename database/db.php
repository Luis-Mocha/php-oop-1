<?php

include_once __DIR__ . '/../models/movie.php';
include_once __DIR__ . '/../models/genre.php';

$arrayMovies = [
    new Movie('spider-man', 5, [ new Genre('cinecomic'), new Genre('action') ] ),
    new Movie('billy elliot', 5, [ new Genre('drama') ] ),
    new Movie('the conjuring', 5, [ new Genre('horror') ] ),
]


?>