<?php

class Director extends Person{

    private array $movies;

    public function __construct($name, $surname, $sex, $birthDate){
        parent::__construct($name, $surname, $sex, $birthDate);
    }

    public function getMovies():array {
        return $this->movies;
    }   
    public function addMovie(Movie $movie){
        $this->movies[] = $movie;
        $movie->setDirector($this);
    }

}

?>