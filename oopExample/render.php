<?php

class Render{

    public static function displayRecipe($recipie)
    {
        return $this->title . " by " . $recipie->source;
    }

}