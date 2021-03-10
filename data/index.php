<?php
<<<<<<< Updated upstream

=======
   
<<<<<<< Updated upstream
>>>>>>> Stashed changes
function readFolderFiles($dir){

$files = scandir('data');
=======
function readFolderFiles($dir){
>>>>>>> Stashed changes


<<<<<<< Updated upstream
    echo '<ul>';
<<<<<<< Updated upstream
    foreach ($files as $file) {
        if(substr($file, 0,1)!='.'){
            echo '<li>';
            if(is_dir($dir . '/' . $file)){
                echo $file;
                readFolderFiles($dir . '/' . $file);
            }else{
                echo '<a href="' . $dir . '/' . $file . '">' . $file. '</a>';
                echo '</li>';
            }
        }
    }
=======
 
>>>>>>> Stashed changes
=======
    foreach($files as $file){

 
>>>>>>> Stashed changes
    echo '</ul>';
    

}

<<<<<<< Updated upstream
<<<<<<< Updated upstream
readFolderFiles('data');
=======
readFolderFiles('html');

?>
>>>>>>> Stashed changes
=======
readFolderFiles('html');

?>
>>>>>>> Stashed changes
