<?php
class Movie
{
    public $title;
    public $desc;
    public $img;
    public $genres;
    public function __construct($title, $desc, array $genres, $img)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->genres = $genres;
        $this->img = $img;
    }

    public function getImg()
    {
        return $this->img;
    }
    // Per stampare senza il layout
    public  function  getMovie()
    {

        foreach ($this as $property) {

            var_dump($property);
        }
    }
}

/* $matrix = new Movie('Matrix', 'Lorem matrix', ['action'], 'matrix.jpg');
$star_wars = new Movie('Star Wars', 'Lorem star wars', ['drama', 'action'], 'starwars.jpg');
var_dump($matrix->getImg());
$matrix->getMovie();
$star_wars->getMovie(); */
