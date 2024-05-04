<?php 

session_start();

$_SESSION["Name"] = "Arham";
$_SESSION["DisplayName"] = "AG Arham";
$_SESSION["Description"] = "Web Developer";

echo $_SESSION["Name"]; echo "<br>";
echo $_SESSION["DisplayName"]; echo "<br>";
echo $_SESSION["Description"]; echo "<br>";

?>