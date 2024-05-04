<?php 
// echo date('d-M-Y');
// date_default_timezone_set('Asia/Dhaka');
// echo date('h:i:sa');

$selfTime = mktime(11, 30, 00, 01, 01, 2025);
echo date('d-M-y h:i:sa', $selfTime);
?>