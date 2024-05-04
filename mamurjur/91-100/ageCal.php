<?php 

$myBirthDate = new DateTime("11/12/2003");
$today = new DateTime();
// echo $today->format("d/M/y");
$age = $today->diff($myBirthDate);
echo $age->format("My age is %Y years, %M months, %D days")

// $birthDates = [
//     "2000-01-01",
//     "1995-03-15",
//     "1988-10-20",
//     "1976-05-30",
//     "1985-12-25",
//     "1999-09-05",
//     "1970-07-10",
//     "2005-02-28",
//     "1990-11-15",
//     "2002-08-08"
// ];

// foreach ($birthDates as $birthdate) {
//     $myBirthDate = new DateTime($birthdate);
//     $today = new DateTime();
//     $age = $today->diff($myBirthDate);
//     echo $myBirthDate->format("Y-m-d") . ": " . $age->format("My age is %Y years, %M months, %D days") . "<br>";
// }


?>