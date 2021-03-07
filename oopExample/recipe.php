<?php 

class Recipie{
    public $ingredients = array();
    public $source = "Alex Gwartney";
    public $title;
    public $instructions = array();
    public $yield;
    public $tag = array();
     
    public function setTitle($title){

        $this->title = ucwords($title);
    }

    public function displayRecipe(){
        return $this->title . "by" . $this->source;
    }

    public function getTitle(){
        return $this->$title;
    }
}

$recipie1 = new Recipie();
$recipie1->source = "chris gwartney";
$recipie1->setTitle("My first recipie");

$recipie2 = new Recipie();
$recipie2->source =  "James gwartney";
$recipie2->title = "My seconed reicpie";

echo->getTitle();
echo $recipie1->displayRecipe();
echo $recipie2->displayRecipe();
