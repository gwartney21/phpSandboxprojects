<?php 

include "recipie.php";
include "render.php";
include "allrecipes.php";
include "recipieCollection.php"

$cookbook = new RecipeCollection("Treehouse recipies");
 echo Render::displayRecipe($belgian_waffles);