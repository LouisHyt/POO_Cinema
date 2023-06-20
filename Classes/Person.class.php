<?php

class Person {
    protected string $name;
    protected string $surname;
    protected string $sex;
    protected DateTime $birthDate;

    public function __construct(string $name, string $surname, string $sex, string $birthDate)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->sex = $sex;
        $this->birthDate = new DateTime($birthDate);
    }
    
   //Getters
    public function getName():string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }
    

    public function getSurname():string {
        return $this->surname;
    }
    public function setSurname(string $surname) {
        $this->surname = $surname;
    }

   
    public function getSex():string {
        return $this->sex;
    }
    public function setSex(string $sex) {
        $this->sex = $sex;
    }


    public function getBirthDate():DateTime {
        return $this->birthDate;
    }
    public function setBirthDate(string $birthDate) {
        $this->birthDate = $birthDate;
    }
    public function getAge():string {
        $now = new DateTime('now');
        $age = $now->diff($this->birthDate)->format("%y ans");
        return $age;
    }

    public function displayInfos():string {
        return "
            Informations sur le réalisateur $this->surname $this->name : <br />
            • Sexe : $this->sex <br />
            • Date de naissance : ". $this->birthDate->format("d/m/Y") ." <br />
            • Age : ". $this->getAge();
    }

    public function __toString()
    {
        return $this->name." ".$this->surname;
    }
}



?>