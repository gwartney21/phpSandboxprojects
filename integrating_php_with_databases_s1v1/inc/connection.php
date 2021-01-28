<?php

try{
    $db = 'mysql:host=localhost;port=3306;dbname=database';
   
    $username = 'root';
    $password = 'root';
    
    $dbh = new PDO($db, $username, $password);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    
}catch (Exception $e){
    echo 'unable to connect';
    echo $e->getmessage();
    exit;
}   

?>