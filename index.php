<?php
class Movie {
    public $title;
    public $genre;
    public $vote;

    function __construct( $_title, $_genre, $_vote) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->vote = $_vote;
    }

    //metodo setter
    function setVote($_vote){
        $this->vote = $_vote;
    }
}

$spider_man = new Movie('spider-man', 'cinecomic', 5);

var_dump($spider_man);

//richiamo la funzione setter della calsse Movie
$spider_man->setVote(4);
var_dump($spider_man);


?>