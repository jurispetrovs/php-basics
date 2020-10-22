<?php

class MovieCollection
{
    private array $movies;

    public function addMovie(Movie $movie): void
    {
        $this->movies[] = $movie;
    }

    public function getPG(): array
    {
        $pgMovies = [];
        /** @var Movie $movie */
        foreach ($this->movies as $movie) {
            if ($movie->getRating() === 'PG') {
                $pgMovies[] = $movie;
            }
        }
        return $pgMovies;
    }
}