<?php

include_once __DIR__ . '/models/movie.php';
include_once __DIR__ . '/models/genre.php';



$spider_man = new Movie('spider-man', 5, new Genre('cinecomic', 'action') );

var_dump($spider_man);

//richiamo la funzione setter della classe Movie
$spider_man->setVote(4);
var_dump($spider_man);


?>