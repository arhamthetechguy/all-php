<?php 

$name = "Arham is a good boy";
echo strlen($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo str_replace('good', 'bad', $name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strpos($name, 'a');

?>