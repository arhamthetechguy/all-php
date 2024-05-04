<?php 

// $fruits = ["banana", "apple", "pepper", "pineapple"];
// sort($fruits);
//    rsort($fruits);
// for ($i = 0; $i < count($fruits); $i++) {
//     echo $fruits[$i] . "<br/>";
// };


$productDetails = [
    'z' => 'smart phone',
    'b' => 'apple',
    'a' => 'pro max',
];
// asort($productDetails);
// arsort($productDetails);
// ksort($productDetails);
krsort($productDetails);
foreach($productDetails as $key => $value){
  echo $key . ': ' . $value . '<br/>';
}

// $productDetails = [
//     'name' => 'Smart Phones',
//     'brand' => 'Apple',
//     'model' => '15 pro max',
//     'price' => 1500
// ];

// foreach($productDetails as $key => $value){
//   echo $key . ': ' . $value . '<br/>';
// }

?>