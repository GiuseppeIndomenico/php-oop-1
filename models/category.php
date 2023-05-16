<?php

class Category
{
    public $genre;

    public $type;


    public function __construct($type, $genre)
    {

        $this->type = $type;
        $this->genre = $genre;
    }
}


?>