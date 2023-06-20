<?php

class Movie{

    private string $title;
    private string $synopsis;
    private DateTime $releaseDate;
    private int $duration;
    private Director $director;
    private CategoryMovie $category;
    private array $castings;
    private int $note;

    public function __construct(string $title, string $synopsis, string $releaseDate, int $duration, CategoryMovie $category, int $note){
        $this->title = $title;
        $this->synopsis = $synopsis;
        $this->releaseDate = new DateTime($releaseDate);
        $this->duration = $duration;
        $this->category = $category;
        $this->category->addMovies($this);
        $this->castings = [];
        $this->note = $note;
    }

    public function getCategory(): CategoryMovie{
        return $this->category;
    }

    public function setCategory(CategoryMovie $category):void{
        $this->category = $category;
    }

    public function getTitle():string{
        return $this->title;
    }
    public function setTitle(string $title):void{
        $this->title = $title;
    }

    public function getSynopsis():string{
        return $this->synopsis;
    }
    public function setSynopsis(string $synopsis):void{
        $this->synopsis = $synopsis;
    }

    public function getReleaseDate():DateTime{
        return $this->releaseDate;
    }
    public function setReleaseDate(string $releaseDate):void{
        $this->releaseDate = new DateTime($releaseDate);
    }

    public function getDuration():int{
        return $this->duration;
    }
    public function setDuration(int $duration):void{
        $this->duration = $duration;
    }

    public function getDirector():Director{
        return $this->director;
    }

    public function setDirector(Director $director):void{
        $this->director = $director;
    }

    public function setCastings(Casting $casting): void{
        $this->castings[] = $casting;
    }

    public function getCastings(): Array{
        return $this->castings;
    }

    public function getNote(): int{
        return $this->note;
    }

    public function setNote(int $note):void{
        $this->note = $note;
    }
    
    public function getActorsInFilm(): string{
        $result = "Acteurs dans le film <strong>".$this->getTitle()."</strong> :<ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->displayRoleActor() ."</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString()
    {
        return $this->title;
    }
}

?>