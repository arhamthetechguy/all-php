<?php 
date_default_timezone_set("Asia/Dhaka");
$date = Date('F-d-Y h:i:s A l');
echo $date;

echo "<br>";

$myTime = mktime(12, 10, 10, 20, 10, 2024,);
echo Date('F-d-Y h:i:s A l', $myTime);

echo "<br>";

//strtotime
$myBirthDay = strtotime("11-12-2024");
echo Date('F-d-Y h:i:s A l', $myBirthDay);

$myBirthDay2 = strtotime("tomorrow");
echo Date('F-d-Y h:i:s A l', $myBirthDay2);

$startDate = strtotime("next month");
$endDate = strtotime("+24 month", $startDate);

while ($startDate <= $endDate) {
    $startDate = strtotime("+1 month", $startDate);
    echo Date("F-d-Y h:i:s A l", $startDate) . "<br/>";
}

?>