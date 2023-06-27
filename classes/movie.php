<?php

class Movie
{
    public string $title;
    public string $director;
    public string $year;
    public string $duration;
    public array $genres;

    public function __construct(string $title, string  $director, string $year, string $duration, array $genres = [])
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->duration = $duration;
        $this->genres = $genres;
    }

    public function getMovieData()
    {
        $genreString = implode(', ', $this->genres);
        return $this->title . ' - ' . $this->director . ' - ' . $this->year . ' - ' . $genreString . ' - ' . $this->duration;
    }
}
