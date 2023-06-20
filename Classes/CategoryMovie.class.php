<?php

class CategoryMovie{

    private string $name;
    private array $movies;

    public function __construct(string $name){
        $this->name = $name;
        $this->movies = [];
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }


    public function getMovies(): array{
        return $this->movies;
    }

    public function addMovies(Movie $movie){
        $this->movies[] = $movie;
    }

    public function displayMovies(): string{
        $result = "Films dans la catégorie <strong>$this->name </strong>: <ul>";
        foreach ($this->movies as $movie) {
            $result .= 
            "<li>
                ". $movie->getTitle() . " - ". $movie->getReleaseDate()->format("Y") ."
            </li>";
        }
        $result .= "</ul>";
        return $result;
    }
}

?>