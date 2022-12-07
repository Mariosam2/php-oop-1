<?php
class Movie
{
    public $title;
    public $desc;
    public $img;
    public function __construct($title, $desc, $img)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->img = $img;
    }
}
