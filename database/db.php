<?php

include_once __DIR__ . '/../models/movie.php';
include_once __DIR__ . '/../models/genre.php';

$arrayMovies = [
    new Movie('spider-man', 5, [ new Genre('cinecomic'), new Genre('action') ] ),
    new Movie('billy elliot', 5, [ new Genre('drama') ] ),
    new Movie('the conjuring', 5, [ new Genre('horror') ] ),
    new Movie('random-movie', 5, [ new Genre('thriller'), new Genre('suspense') ] ),
    new Movie('nice-movie', 3, [ new Genre('adventure'), new Genre('romantic') ] ),
    new Movie('spider-man', 2, [ new Genre('drama'), new Genre('action') ] ),
]

?>