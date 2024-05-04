<?php
$data = [
    "name" => "Arham",
    "email" => "Test@Arham.com",
    "phone" => "018000000",
    "gender" => "Male",
    "city" => "Cox's Bazar",
];

$jsonData = json_encode($data);
echo $jsonData;

$jsonDecode = json_decode($jsonData);

echo "<pre>";
print_r($jsonDecode);
echo "</pre>";


?>