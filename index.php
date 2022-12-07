<?php
class Movie
{
    public $title;
    public $desc;
    public $img;
    public $genre;
    public function __construct($title, $desc, $genre, $img)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->genre = $genre;
        $this->img = $img;
    }

    public function getImg()
    {
        return $this->img;
    }

    public  function  getMovie()
    {
        foreach ($this as $value) {
            var_dump($value);
        }
    }
}

$matrix = new Movie('Matrix', 'Lorem matrix', 'action', 'matrix.jpg');
$star_wars = new Movie('Star Wars', 'Lorem star wars', 'drama', 'starwar.jpg');
//var_dump($matrix->getImg());
$matrix->getMovie();
$star_wars->getMovie();
