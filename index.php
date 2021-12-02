<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
require_once "./classes/Movie.php";

$movie1 = new Movie("Venom - La furia di Carnage");

$movie1->setImg("sSdRI34rbqXj21SruV52AUoXRkE.jpg");
$movie1->getImg();

$movie1->setCategories("Fantascienza,Azione,Avventura");
$movie1->getCategories();

$movie1->setScore(50);
$movie1->getScore();

$movie1->setRelease(null);
$movie1->getRelease();


//var_dump($movie1);

$movie2 = new Movie("Clifford - Il grande cane rosso");

$movie2->setImg("aKfxlsL0o2M4aBmX8NMFXlXFKCg.jpg");
$movie2->getImg();

$movie2->setCategories("Animazione, Commedia, Famiglia");
$movie2->getCategories();

$movie2->setScore(76);
$movie2->getScore();

$movie2->setRelease("10/11/2021");
$movie2->getRelease();

//var_dump($movie2);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
    <h1 class="my-5 text-center">LATEST MOVIES</h1>
    </header>

    <div class="container ">
    <div class="d-flex justify-content-center">

            <div class="card mx-5" style="width: 18rem;">
                <img src="<?php echo $movie1->img ?>" class="card-img-top" alt=<?php echo $movie1->title ?>>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie1->title ?></h5>
                    <p class="card-text"><strong>Score:</strong> <?php echo $movie1->score ?>/5</p>
                </div>
                <ul class="list-group list-group-flush">
                    <?php

                    foreach ($movie1->categories as $category) {
                        echo "<li class='list-group-item'>$category</li>";
                    }

                    ?>

                </ul>
                <div class="card-body">
                    <p><?php if ($movie1->released) {
                            echo "already released";
                        } else {
                            echo "to be released";
                        }
                        ?></p>
                </div>
            </div>

            <div class="card mx-5" style="width: 18rem;">
                <img src="<?php echo $movie2->img ?>" class="card-img-top" alt=<?php echo $movie2->title ?>>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie2->title ?></h5>
                    <p class="card-text"><strong>Score:</strong> <?php echo $movie1->score ?>/5</p>
                </div>
                <ul class="list-group list-group-flush">
                    <?php

                    foreach ($movie2->categories as $category) {
                        echo "<li class='list-group-item'>$category</li>";
                    }

                    ?>

                </ul>
                <div class="card-body">
                    <p><?php if ($movie2->released) {
                            echo "Already released";
                        } else {
                            echo "To be released";
                        }
                        ?></p>
                </div>
            </div>
    </div>
    </div>


</body>

</html>