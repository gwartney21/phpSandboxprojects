<?php 

class Recipie{

    private $ingredients = array();
    private $source = "Alex Gwartney";
    private $title;
    private $instructions = array();
    private $yield;
    private $tag = array();

    private $measurements = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lib",
        "fl oz",
        "print",
        "quart",
        "gallon"

    );

    public function addIngredient($item, $amount = null, $measure = null){
       
       if($amount != null && if_float($amount) && !is_int($amount)){
           exit("The amount must be a float: " . gettype($amount) . "$amount given");
       }

       if($measure != null && !in_array(strtolower($measure),$this->measurements)){
           exit("Please enter a valid measurement:" . implode(", ", $this->measurements));
       } 

        $this->ingredients[] = array(
            "item" =>ucwords($item),
            "amount" => $amount, 
            "measure" => strlower($measure)
        );
    }

    public function addInstruction($string){
        $this->instructions[] = $string;
    }

    public function getInstructions(){
        return $this->instructions;
    }

    public getIngredients(){
        return this->ingredients;
    }
     
    public function setTitle($title){

        $this->title = ucwords($title);
    }

    public function displayRecipe(){
        return $this->title . "by" . $this->source;
    }

    public function getTitle(){
        return $this->title;
    }
}

