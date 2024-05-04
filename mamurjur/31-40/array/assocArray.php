<?php 

// $productDetails = [
//     'A' => 'samsung',
//     'z' => 'smart phone',
//     'b' => 'apple',
//     'a' => 'pro max',
// ];

// $caseChange = array_change_key_case($productDetails, CASE_UPPER);

// foreach($caseChange as $key => $value){
//     echo $key . ' : ' . $value . '<br/>';
// }




// $productDetails = [
//     'A' => 'samsung',
//     'z' => 'smart phone',
//     'b' => 'apple',
//     'a' => 'pro max',
// ];

// $chunkArray = array_chunk($productDetails, 2, true);

// foreach($chunkArray as $chunk){
//     foreach($chunk as $key => $value){
//         echo $key . ' : ' . $value . '<br/>';
//     }
// }





// $personInfo = [
//     [
//         'id' => '1',
//         'username' => 'Arham',
//         'phone' => '01823131196'
//     ],
//     [
//         'id' => '2',
//         'username' => 'AG Arham',
//         'phone' => '01823131196'
//     ],
//     [
//         'id' => '3',
//         'username' => 'Hadi Vai',
//         'phone' => '01823131196'
//     ]
// ];

// $arrayColumn = array_column($personInfo, 'username', 'id');
// foreach($arrayColumn as $key => $value){
//     echo $key . ' : ' . $value . '<br/>';
// }




// $userName = ['Arham', 'AG Arham', 'Hadi Vai', 'Aiman'];
// $userId = [1, 2, 3, 4];

// $arrayComb = array_combine($userId, $userName);

// foreach($arrayComb as $key => $value){
//     echo $key . ": " . $value . '<br/>';
// }

// var_dump($arrayComb);






// $personInfo = [

//     'id' => 10,
//     'username' => 20,
//     'phone' => 30,
//     'mail' => 40,
//     'city' => 'Dhaka'
// ];

// $anotherInfo = [
    
//     'id' => 10,
//     'username' => 20,
//     'phone' => 30,
//     'test' => 80
// ];

// $thirdInfo = [
    
//     'id' => 10,
//     'username' => 20,
//     'phone' => 30,
//     'city' => 'Dhaka'
// ];


// $diffArray = array_diff($personInfo, $anotherInfo, $thirdInfo);
// var_dump($diffArray);

// $arrayDiffAssoc = array_diff_assoc($personInfo, $anotherInfo);
// var_dump($arrayDiffAssoc);




// Array Fill-----------------------------------
// $arrayFill = array_fill(4, 2, "Arham vai");
// var_dump($arrayFill);


// Array Fill Keys-----------------------------------
// $setArrayKeys = [2, 3, 4, 5];
// $arrayFill = array_fill_keys($setArrayKeys, "Arham vai");
// var_dump($arrayFill);

$numberList = [2, 3, 4, 7, 8, 9, 10, 11, 12];

if(!function_exists('checkOdd')){
    function checkOdd($var){
        return ($var & 1);
    }
}

$filteredNumber = array_filter($numberList, 'checkOdd');
print_r($filteredNumber);
?>