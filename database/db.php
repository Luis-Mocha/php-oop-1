<?php

include_once __DIR__ . '/../models/movie.php';
include_once __DIR__ . '/../models/genre.php';

$arrayMovies = [
    new Movie('spider-man', 5, [ new Genres('cinecomic'), new Genre('action') ] ),
    new Movie('billy elliot', 5, new Genres('drama') ),
    new Movie('the conjuring', 5, new Genres('horror') ),
]


?>