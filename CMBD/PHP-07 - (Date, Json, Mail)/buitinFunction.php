<?php
$path = $_SERVER['PHP_SELF'];
echo dirname($path);

//copy
copy('test.php', 'test2.php');

// file
$data = file('test.php');
echo "<pre>";
print_r($data);
echo "</pre>";

// file exists
$file = file_exists("test.php");
echo $file ? "file exists" : "file not exists";

echo "<br/>";

echo "<br/>";
$file2 = file_put_contents('test.php', "Hello Bangladesh!");

$file2 = file_get_contents("test.php");
print_r($file2);

echo "<br/>";

echo filesize("test.php");

echo filetype("test");



?>