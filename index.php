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
}

$spider_man = new Movie('spider-man', 'cinecomic', 5);

var_dump($spider_man);


?>