<?php
class Genre {
    public $main_genre;
    public $secondary_genre;

    function __construct( $_main, $_secondary) {
        $this->main_genre = $_main;
        $this->secondary_genre = $_secondary;
    }

    //metodo setter
    function setMain($_main){
        $this->main_ = $_main;
    }

    function setSecondary($_secondary){
        $this->secondary_genre = $_secondary;
    }
}