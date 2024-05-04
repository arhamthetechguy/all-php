<?php 


$person_info = [
    'id' => 10,
    'name' => 'Arham',
    'gender' => 'Male',
    'phone' => '01884822986'
];

// $arrayFilp = array_flip($person_info);
// print_r($arrayFilp);


$person_info_two = [
    'id' => 11,
    'name' => 'Arham',
    'gender' => 'Male',
    'phone' => '01884822983'
];

// $arrayIntersect = array_intersect($person_info, $person_info_two);
// print_r($arrayIntersect);

// $arrayIntersect = array_intersect_assoc($person_info, $person_info_two);
// print_r($arrayIntersect);

$arrayIntersect = array_intersect_key($person_info, $person_info_two);
print_r($arrayIntersect);





?>