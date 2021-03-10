<?php 
class Recipe
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Alena Holligan";
    
    private $measurements = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    );
    
    public function __construct($title = null){
        $this->setTitle($title);

    }

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        }
        if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure)
        );
    }
    
    public function getIngredients()
    {
        return $this->ingredients;
    }
    
         
    public function addInstruction($string)
    {
        $this->instructions[] = $string;
    }

    public function setTitle($title){

        if(empty($title)){
            $this->title =null;
        }else{
            $this->title = ucwords($title);
        }
    }

    public function addTag(){
        $this->tags[] =  strtolower($tag);
    }
    
    public function getTags(){
        return $this->tags;
    }

    public function setYield($yield){
        $this->yield = $yield;
    }
    
    public function getYiled(){
        return $this->yield;
    }
    public function setSource($source){
        return $this->yield = $source;
    }

    public function getSource(){
        $this->source = ucwords($source);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

}

