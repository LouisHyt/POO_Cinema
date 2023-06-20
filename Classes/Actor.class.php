<?php

class Actor extends Person{

    private array $castings;

    public function __construct(string $name, string $surname, string $sex, string $birthDate){
        parent::__construct($name, $surname, $sex, $birthDate);
        $this->castings = [];
    }

    public function setCastings(Casting $casting): void{
        $this->castings[] = $casting;
    }

    public function getCastings(): Array{
        return $this->castings;
    }

    public function getMoviesList(): string{
        $result = "Filmographie de <strong>$this</strong> (Acteur) :<ul>";
        foreach ($this->castings as $casting) {
            $result .= 
            "<li>
                ". $casting->getMovie() ." (" .$casting->getRole(). ") - ". $casting->getMovie()->getReleaseDate()->format("Y") ."
            </li>";
        }
        $result .= "</ul>";
        return $result;
    }
}

?>