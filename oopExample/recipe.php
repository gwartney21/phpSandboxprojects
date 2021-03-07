<?php 

class Recipie{
    public $ingredients = array();
    public $source = "Alex Gwartney";
    public $title;
    public $instructions = array();
    public $yield;
    public $tag = array();
}

$recipie1 = new Recipie();
echo $recipie1->source;
$recipie1->source = "chris gwartney";
echo $recipie1->source;

$recipie2 = new Recipie();
$recipie2->source =  "James gwartney";
echo $recipie2;

