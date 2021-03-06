<?php 

$files = scandir('html');

echo '<ul>';
foreach ($files as $file) {
  echo '<li>';
  echo $file;
  echo '</li>';

}
echo '</ul>';

