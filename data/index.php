<?php
<<<<<<< Updated upstream

=======
   
>>>>>>> Stashed changes
function readFolderFiles($dir){

$files = scandir('data');


<<<<<<< Updated upstream
    echo '<ul>';
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
    echo '</ul>';
    

}

<<<<<<< Updated upstream
readFolderFiles('data');
=======
readFolderFiles('html');

?>
>>>>>>> Stashed changes
