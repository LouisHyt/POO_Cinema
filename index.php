<?php

spl_autoload_register(function ($class) {
    require_once "Classes/$class.class.php";
});

$spielberg = new Director("Spielberg", "Steven", "Homme", "1946-12-18");
$catchme = new Movie(
    "Catch me if you can", 
    "Frank Abagnale Jr croyait vivre dans une famille stable. Lorsqu'il apprend que ses parents ont décidé de divorcer, il ne supporte pas la situation et, sous le choc, fugue. Bien vite confronté aux réalités de la vie en solitaire, il tente de s'insérer, mais découvre qu'il est plus facile d'endosser de faux chèques que de travailler. Il prend l'identité d'un pilote de ligne et mène la belle vie. Un agent du FBI opiniâtre le suit à la trace en espérant un jour le coincer.",
    "2003-02-12",
    140
);

$spielberg->addMovie($catchme);

?>