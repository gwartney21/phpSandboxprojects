<form>
    <label for="country">Country</label>
    <select name="country" id="country">
        <?php include 'data/html/countries.html'; ?>
    </select>
    <label name="state" id="state">
    <select name ="state" id="state">
        <?php
            if($fh = fopen('data/html/states.html', 'r')){
                while(! feof($fh)){
                    $line = fgets($fh);
                    if(strpos($line, 'Oregon')){
                        echo str_replace('>Oregon','selected>Oregon', $line);
                    }else{
                        echo $line;
                    }
                    
                }
                fclose($fh);
            }
            echo '<optgroup label="US outlying territories">';
            $states = file_get_contents('data/html/territories.html');
            echo strtolower($states);
            echo '</optgroup>';

            echo '<optgroup label="Armed Forces">';
            $state_array = file('data/html/armed_forces.html');
            foreach($state_array as $line){
                echo str_replace('Armed Forces' , '', $line);
            }
        ?>
    </select>
</form>