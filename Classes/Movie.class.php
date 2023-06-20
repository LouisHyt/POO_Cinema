<?php

class Movie{

    private string $title;
    private string $synopsis;
    private DateTime $releaseDate;
    private int $duration;
    private Director $director;

    public function __construct(string $title, string $synopsis, string $releaseDate, int $duration){
        $this->title = $title;
        $this->synopsis = $synopsis;
        $this->releaseDate = new DateTime($releaseDate);
        $this->duration = $duration;
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
}

?>