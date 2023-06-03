<?php

class Movie {
    public $title;
    public $vote;
    public $genre;

    function __construct( $_title, $_vote, $_genre) {
        $this->title = $_title;
        $this->vote = $_vote;
        $this->genre = $_genre;
    }

    //metodo setter
    function setVote($_vote){
        $this->vote = $_vote;
    }
}