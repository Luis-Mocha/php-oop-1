<?php
class Genre {
    public $name;

    function __construct( String $_name) {
        $this->name = $_name;
    }

    //metodo setter
    function setname($_name){
        $this->name = $_name;
    }
}