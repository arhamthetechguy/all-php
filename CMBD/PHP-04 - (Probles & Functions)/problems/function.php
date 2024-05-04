<?php 
//find maximum number of an array
// $numbers = [12, 2, 3, 4, 5];
// $max = max($numbers);

// echo $max;
// $numbers = [12, 2, 3, 4, 5];
// rsort($numbers);
// $uniqueNum = array_values(array_unique($numbers));
// echo ($uniqueNum [1]);

// $numbers = [5, 2, 9, 1, 7, 25];
// sort($numbers);
// print_r($numbers);

// $numbers = [5, 2, 9, 1, 7];
// $sumNum = array_sum($numbers) / count($numbers);

// echo $sumNum;
// $numbers = array(1, 2, 3);
// $letters = array('a', 'b', 'c');
// $merged = array_merge($numbers, $letters);
// print_r($merged);

// $num = [1, 2, 4, 5, 6, 7, 8];
// $letters = ["a", "b", "c"];
// $merged = array_merge($num, $letters);

// print_r($merged);

// $num = ["Arham", 1, 2, 4, 5, 6, 7, 8];
// $name = "Arham";
// if (in_array($name, $num)){
//     echo "$name is in the array";
// } else {
//     echo "$name is not in the array";
// }

// $name = ["Arham", "Rahim", "karim", "salam", "rafique"];
// $toLower = array_map('strtolower', $name);
// // print_r($toLower);
// $name = ["Arham", "Rahim", "karim", "salam", "rafique"];
// $toUpper = array_map('strtoupper', $name);
// print_r($toUpper);

// $num = ["Arham", 1, 2, 4, 5, 6, 7, 8, 4, 2, 11];
// $getUnique = array_values(array_unique($num));
// print_r($getUnique);

// $email = "example@example.com";
// $existEmail = ["test@example.com", "email@email.com", "example@example.com"];
// echo !in_array($email, $existEmail) ? "Email is unique" : "Email is already exists";

// $list1 = 'apple, orange, banana';
// $list2 = 'banana, grape, apple';
// $mergedList = implode(', ', array_unique(array_merge(explode(', ', $list1), explode(', ', $list2))));
// echo $mergedList;


// // Two comma-separated lists
// $list1 = "1,2,3,4,5";
// $list2 = "3,4,5,6,7";

// // Step 1: Split the lists into arrays
// $array1 = explode(",", $list1);
// $array2 = explode(",", $list2);

// // Step 2: Merge the arrays
// $mergedArray = array_merge($array1, $array2);

// // Step 3: Remove duplicate values
// $uniqueArray = array_unique($mergedArray);

// // Step 4: Implode the array back into a comma-separated list
// $resultList = implode(",", $uniqueArray);

// // Display the result
// echo $resultList;


// $list1 = "1,2,3,4,5";
// $list2 = "3,4,5,6,7";

// $resultList = implode(",", array_unique(array_merge(explode(",", $list1), explode(",", $list2))));

// echo $resultList;

// $array1 = array('a' => 5, 'b' => 2, 'c' => 3);
// $array2 = array('b' => 2, 'c' => 3, 'd' => 4);
// $diff = array_diff_assoc($array1, $array2);
// print_r($diff);
 
// $data = array('name' => 'John', 'age' => 25, 'city' => 'New York');
// $allowedKeys = array('name', 'city');
// $filteredData = array_intersect_key($data, array_flip($allowedKeys));
// print_r($filteredData);

// $strings = array('  apple  ', 'orange ', ' banana');
// $trimmedStrings = array_map('trim', $strings);
// print_r($trimmedStrings);

// $fruits = ["apple  ", "    orange", "banana  ",];
// $removeSpace = array_map("trim", $fruits);

// print_r($removeSpace);

// $keys = ['name', 'age', 'city'];
// $values = ['John', 25, 'New York'];
// $combineArray = array_combine($keys, $values);

// print_r($combineArray);

// $string = ['apple, orange, banana'];
// $array = implode(",", $string);
// print_r($array);

// $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-".date("YmdHis");
// $strSuffle = str_shuffle($chars);

// echo substr($strSuffle, 0, 8);

// echo "<br>";


// function personInfo ($name="Waziha", $age=21, $gender="Male"){
//     return "Her name is $name, age is $age and gender is $gender <br>";
// }
// echo personInfo(gender: "Female");
// echo personInfo("Rumaisa", "22", "Female");
// echo personInfo("Arham", "21", "Male");

?>

