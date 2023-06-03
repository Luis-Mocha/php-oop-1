<?php

include_once __DIR__ . '/../models/movie.php';
include_once __DIR__ . '/../models/genre.php';

$arrayMovies = [
    new Movie('spider-man', 5, new Genre('cinecomic', 'action') ),
    new Movie('billy elliot', 5, new Genre('drama', null) ),
]


?>