<?php
include __DIR__ . '/models/movie.php';
$movies = [
    $padrino = new Movie('Il Padrino', 'en', 9.0, new Category('adulti', 'gangster-movie')),
    $harry = new Movie('Star Wars', 'en', 6.2, new Category('ragazzi', 'fantasy')),
    $pulp = new Movie('Indiana Jones', 'en', 9.8, new Category('accompagnati', 'Avventura')),
    $aldo = new Movie('Tre uomini e una gamba', 'it', 10.0, new Category('tutti', 'comico')),
    $esorcista = new Movie('L\'esorcista', 'en', 7.5, new Category('adulti', 'horror')),
    $dumbo = new Movie('Dumbo', 'en', 6.9, new Category('bambini', 'animazione'))
];

//var_dump($movies)
?>











<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php-oop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class=" bg-dark">
    <div class="container">

        <h1 class="text-center fw-bold m-5 display-1 text-danger">MOVIES!!!</h1>

        <div class="row ">


            <?php

            foreach ($movies as $movie) {
                ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h2 class="text-center">
                                <?php echo $movie->title ?>
                            </h2>

                        </div>

                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-center">nazionalità</h5>

                                <p>
                                    <?php echo $movie->nationality ?>
                                </p>


                            </div>
                            <div>
                                <h5 class="text-center">categoria:</h5>
                                <p>
                                    <?php echo $movie->category->type; ?>
                                </p>
                            </div>

                            <div>
                                <h5 class="text-center">genere:</h5>
                                <p>
                                    <?php echo $movie->category->genre; ?>
                                </p>
                            </div>






                            <div>
                                <h5 class="text-center">voto:</h5>
                                <p>
                                    <?php echo $movie->vote ?>
                                </p>
                            </div>

                        </div>
                    </div>



                </div>



            <?php } ?>



        </div>

    </div>



</body>

</html>