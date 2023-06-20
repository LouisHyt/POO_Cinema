<?php

class Director extends Person{

    private array $movies;

    public function __construct($name, $surname, $sex, $birthDate){
        parent::__construct($name, $surname, $sex, $birthDate);
        $this->movies = [];
    }

    public function getMovies():array {
        return $this->movies;
    }   
    public function addMovie(Movie $movie){
        $this->movies[] = $movie;
        $movie->setDirector($this);
    }

    public function getMoviesList(): string{
        $sorted = SortArray::sort($this->movies, false);

        //var_dump($this->movies);
        $result = "Fimographie de <strong>$this->surname $this->name</strong> (Réalisateur) :<ul>";
        foreach ($sorted as $movie) {
            $result .= 
            "<li>
                ". $movie->getTitle() . " (". $movie->getReleaseDate()->format("Y") .") ". DisplayNote::getNote($movie->getNote()) . "
            </li>";
        }
        $result .= "</ul>";
        return $result;
    }

}

?>