<?php

try{
    $db = 'mysql:host=localhost;port=3306;dbname=database';
   
    $username = 'root';
    $password = 'root';
    
    $dbh = new PDO($db, $username, $password);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'conected';
    
}catch (Exception $e){
    echo 'unable to connect';
    echo $e->getmessage();
    exit;
}   

// Query the databae select all information from table

try{
    $results = $dbh->query("SELECT title, category FROM Media");
    var_dump( $results->fetchAll(PDO::FETCH_ASSOC) );
}catch (Exception $e){
    echo 'unable to retreive data';
    echo $e->getmessage();
    exit;
}   



?>