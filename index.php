<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
require_once "./classes/Movie.php";

$movie1 = new Movie("Venom - La furia di Carnage");

$movie1->setCategories("Fantascienza,Azione,Avventura");
$movie1->getCategories();

$movie1->setScore(50);
$movie1->getScore();

$movie1->setRelease(null);
$movie1->getRelease();


var_dump($movie1);
$movie2 = new Movie("Clifford - Il grande cane rosso");

$movie2->setCategories("Animazione, Commedia, Famiglia");
$movie2->getCategories();

$movie2->setScore(76);
$movie2->getScore();

$movie2->setRelease("10/11/2021");
$movie2->getRelease();

var_dump($movie2);


?>