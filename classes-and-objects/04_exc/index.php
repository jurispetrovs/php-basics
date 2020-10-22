<?php

require_once 'Movie.php';
require_once 'MovieCollection.php';

$movieCollection = new MovieCollection();

$movieCollection->addMovie(new Movie('Casino Royale', 'Eon Productions', 'PG13'));
$movieCollection->addMovie(new Movie('Glass', 'Buena Vista International', 'PG13'));
$movieCollection->addMovie(new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures'));

/** @var Movie $movie */
foreach ($movieCollection->getPG() as $movie) {
    echo $movie->getTitle() . ' | ';
    echo $movie->getStudio() . ' | ';
    echo $movie->getRating() . PHP_EOL;
}