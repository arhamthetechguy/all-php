<?php

session_start();
if (!isset($_SESSION["Name"])) {
    header("Location: session.php");
}

echo $_SESSION['Name']; echo "<br/>";
echo $_SESSION['DisplayName']; echo "<br/>";

?>