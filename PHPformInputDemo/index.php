<?php

function getUserInfo(){
    if (isset($_GET['name'], $_GET['lang'])){
        $name = $_GET['name'];
        $lang = $_GET['lang'];
        echo $name . '<br>'; 
        echo $lang;
        }
}

getUserInfo();

?>
