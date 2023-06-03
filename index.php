<?php

include_once __DIR__ . '/models/movie.php';
include_once __DIR__ . '/models/genre.php';



$spider_man = new Movie('spider-man', 4, new Genre('cinecomic', 'action') );

var_dump($spider_man);

//richiamo la funzione setter della classe Movie
$spider_man->setVote(5);
var_dump($spider_man);


echo $spider_man->genre->secondary_genre;

//richiamo la funzione setter della classe Genre
$spider_man->genre->setSecondary('adventure');
var_dump($spider_man);

$elliot = new Movie('billy elliot', 5, new Genre('drama', null) );
var_dump($elliot);

?>