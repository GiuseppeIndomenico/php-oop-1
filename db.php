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

?>