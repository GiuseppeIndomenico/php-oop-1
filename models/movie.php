<?php
include __DIR__ . '/category.php';
class Movie
{
    public $title;
    public $nationality;
    public $vote;
    public $category;



    public function __construct($title, $nationality, $vote, Category $category)
    {
        $this->title = $title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->category = $category;
    }


    public function getFullTitle()
    {

        return "<h2>$this->title</h2>";
    }



}


?>