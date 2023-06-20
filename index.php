<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
require_once("./utils/DisplayNote.php");
require_once("./utils/SortArray.php");

spl_autoload_register(function ($class) {
    require_once "Classes/$class.class.php";
});


//Réalisateurs
$spielberg = new Director("Spielberg", "Steven", "Homme", "1946-12-18");
$jeannot = new Director("Szwarc", "Jeannot", "Homme", "1939-11-21");
$MattReeves = new Director("Reeves", "Matt", "Homme", "1956-11-21");
$zackSnyder = new Director("Snyder", "Zack", "Homme", "2016-03-23");
$christopherN = new Director("Nolan", "Christopher", "Homme", "1970-01-30");

//Catégories de film
$drame = new CategoryMovie("Drame");
$thriller = new CategoryMovie("thriller");
$sciencefi = new CategoryMovie("SF");
$action = new CategoryMovie("action");

//Films
$catchme = new Movie(
    "Catch me if you can", 
    "Frank Abagnale Jr croyait vivre dans une famille stable. Lorsqu'il apprend que ses parents ont décidé de divorcer, il ne supporte pas la situation et, sous le choc, fugue. Bien vite confronté aux réalités de la vie en solitaire, il tente de s'insérer, mais découvre qu'il est plus facile d'endosser de faux chèques que de travailler. Il prend l'identité d'un pilote de ligne et mène la belle vie. Un agent du FBI opiniâtre le suit à la trace en espérant un jour le coincer.",
    "2003-02-12",
    140,
    $drame,
    2
);

$dentsdelamer = new Movie(
    "Les dents de la mer", 
    "À quelques jours du début de la saison estivale, les habitants de la petite station balnéaire d'Amity sont en émoi face à la découverte, sur le littoral, du corps atrocement mutilé d'une jeune vacancière. Pour Martin Brody, le chef de la police, il ne fait aucun doute que la jeune fille a été victime d'un requin. Il décide alors d'interdire l'accès des plages mais se heurte à l'hostilité du maire, uniquement intéressé par l'afflux des touristes.",
    "1976-01-01",
    124,
    $thriller,
    1
);

$dentsdelamer2 = new Movie(
    "Les dents de la mer 2", 
    "Quatre ans après les désastres causés par le requin blanc, la station balnéaire d'Amity se remet à vivre. Cependant, deux accidents étranges - la découverte du cadavre d'une baleine déchiquetée et la disparition de deux plongeurs qui ne laissent d'autres traces qu'un appareil de plongée trouvé sous leur luxueux yatch - inquiètent de nouveau Martin Brody, le chef de la police.",
    "1978-06-16",
    126,
    $thriller,
    3
);

$et = new Movie(
    "ET, l'extra-terrestre", 
    "Une soucoupe volante atterrit en pleine nuit près de Los Angeles. Quelques extraterrestres, envoyés sur Terre en mission d'exploration botanique, sortent de l'engin, mais un des leurs s'aventure au-delà de la clairière où se trouve la navette. Celui-ci se dirige alors vers la ville. C'est sa première découverte de la civilisation humaine. Bientôt traquée par des militaires et abandonnée par les siens, cette petite créature apeurée se nommant E.T. se réfugie dans une résidence de banlieue.",
    "1982-01-12",
    115,
    $sciencefi,
    4
);

$jurrasic = new Movie(
    "Jurassic Park", 
    "Ne pas réveiller le chat qui dort -- c'est ce que le milliardaire John Hammond aurait dû se rappeler avant de se lancer dans le clonage de dinosaures. C'est à partir d'une goutte de sang absorbée par un moustique fossilisé que John Hammond et son équipe ont réussi à faire renaître une dizaine d'espèces de dinosaures.",
    "1993-10-20",
    127,
    $sciencefi,
    5
);

$theBatman = new Movie(
    "The Batman", 
    "Dans sa deuxième année de lutte contre le crime, le milliardaire et justicier masqué Batman explore la corruption qui sévit à Gotham et notamment comment elle pourrait être liée à sa propre famille, les Wayne, à qui il doit toute sa fortune. En parallèle, il enquête sur les meurtres d'un tueur en série qui se fait connaître sous le nom de Sphinx et sème des énigmes cruelles sur son passage.",
    "2022-03-04",
    180,
    $action,
    6
);

$batmanvSuperman = new Movie(
    "Batman v Superman : L'Aube de la justice", 
    "Craignant les débordements d'un superhéros aux pouvoirs infinis, le justicier de Gotham City, lui-même doté d'une détermination et d'une force de frappe redoutables, affronte le sauveur des temps modernes adulé de Metropolis sous le regard du monde entier qui se demande quel type de héros lui convient le mieux.",
    "2016-03-30",
    145,
    $action,
    3
);

$batmanBegins = new Movie(
    "Batman Begins", 
    "Comment un homme seul peut-il changer le monde ? Telle est la question qui hante Bruce Wayne depuis cette nuit tragique où ses parents furent abattus sous ses yeux, dans une ruelle de Gotham City. Torturé par un profond sentiment de colère et de culpabilité, le jeune héritier de cette richissime famille fuit Gotham pour un long et discret voyage à travers le monde. Le but de ses pérégrinations : sublimer sa soif de vengeance en trouvant de nouveaux moyens de lutter contre l'injustice.",
    "2005-06-15",
    140,
    $action,
    4
);


//Ajouts des Films
$spielberg->addMovie($catchme);
$spielberg->addMovie($dentsdelamer);
$spielberg->addMovie($et);
$spielberg->addMovie($jurrasic);
$jeannot->addMovie($dentsdelamer2);
$MattReeves->addMovie($theBatman);
$zackSnyder->addMovie($batmanvSuperman);
$christopherN->addMovie($batmanBegins);

//Acteurs
$RoyScheider = new Actor('Scheider', 'Roy', 'Homme', '1932-10-11');
$RichardDreyfuss = new Actor('Dreyfuss', 'Richard', 'Homme', '1947-09-29');
$christianBale = new Actor('Bale', 'christian', 'Homme', '19474-01-30');
$benAffleck = new Actor('Affleck', 'Ben', 'Homme', '1972-08-15');
$robertPattinson = new Actor('Pattinson', 'Robert', 'Homme', '1986-05-13');

//Roles
$martinB = new Role("Martin Brody");
$mattH = new Role("Matt Hooper");
$batman = new Role("Batman");

//castings
$casting1 = new Casting($dentsdelamer, $RoyScheider, $martinB);
$casting2 = new Casting($dentsdelamer2, $RoyScheider, $martinB);
$casting3 = new Casting($dentsdelamer, $RichardDreyfuss, $mattH);
$casting4 = new Casting($theBatman, $robertPattinson, $batman);
$casting5 = new Casting($batmanvSuperman, $benAffleck, $batman);
$casting6 = new Casting($batmanBegins, $christianBale, $batman);

//Affichage

    //Filmographie d'un réalisateur
    echo($spielberg->getMoviesList());

    //Filmographie d'un acteur
    echo($RoyScheider->getMoviesList());

    //Films par genre
        //Drame
        echo($drame->displayMovies());
        echo($sciencefi->displayMovies());

    //Roles dans un film
    echo($dentsdelamer->getActorsInFilm());
    echo($dentsdelamer2->getActorsInFilm());

    //Acteurs ayant eu un role
    echo($batman->getActors());

?>