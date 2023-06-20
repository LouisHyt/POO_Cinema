<?php

class Casting{

    private Movie $movie;
    private Actor $actor;
    private Role $role;

    public function __construct(Movie $movie, Actor $actor, Role $role){
        $this->movie = $movie;
        $this->movie->setCastings($this);
        $this->actor = $actor;
        $this->actor->setCastings($this);
        $this->role = $role;
        $this->role->setCastings($this);
    }

    public function getMovie(): Movie{
        return $this->movie;
    }
    public function setMovie(Movie $movie): void{
        $this->movie = $movie;
    }

    public function getActor(): Actor{
        return $this->actor;
    }
    public function setActor(Actor $actor): void{
        $this->actor = $actor;
    }

    public function getRole(): Role{
        return $this->role;
    }
    public function setRole(Role $role): void{
        $this->role = $role;
    }

    public function displayRoleActor(): string{
        return $this->actor->getSurname() . " " . $this->actor->getName(). " a interprété le personnage " . $this->role->getName();
    }

}

?>