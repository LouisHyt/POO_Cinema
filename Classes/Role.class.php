<?php


class Role{

    private string $name;
    private array $castings;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function setCastings(Casting $casting): void{
        $this->castings[] = $casting;
    }

    public function getCastings(): Array{
        return $this->castings;
    }

    public function getActors(): string{
        $result = "Acteurs ayant interprété le rôle de <strong>".$this->getName()."</strong> :<ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>".$casting->getActor()->getSurname() ." ".$casting->getActor()->getName()." (".$casting->getMovie()->getTitle().")</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString()
    {
        return $this->name;
    }
}


?>