<?php 

include "recipie.php";

$recipie1 = new Recipie();
$recipie1->setSource = "chris gwartney";
$recipie1->setTitle("My first recipie");
$recipie1->addIngredient("egg",1);

$recipie2 = new Recipie();
$recipie2->setSource =  "James gwartney";
$recipie2->title = "My seconed reicpie";


echo $recipe1->getTitle();

foreach($recipe1->getIngredients() as $ing){
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " .  $ing["item"];
}

$recipe1->addInstruction("This is my first instruction");
$recipie1->addInstruction("This is my seconed instruction");

 echo implode("\n",$recipe1->getInstructions());

 $recipe1->addTag("MainCoruse");
 $recipe1->addTag("Breakfast")

 echo implode(",", $recipie->getTags() );

 $recipie->setYield("6 servings");
 $recipe1->getSource();

 
echo->getTitle();
echo $recipie1->displayRecipe();
echo $recipie2->displayRecipe();