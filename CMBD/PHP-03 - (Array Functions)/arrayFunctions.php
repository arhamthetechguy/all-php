<?php 
    // php array
    // $studentInfo = ["Arham", "21", "Unmarried", "Male", true, "Bangladeshi", "Honours"];
    // $studentData = ["Pencil", "Khata", "Bag", "Uniform"];
    // $isArray = is_array($studentInfo);
    // var_dump($isArray);
    
    // $inArray = in_array("Arham", $studentInfo);
    // var_dump($inArray);
    
    // $arrayMerge = array_merge($studentInfo, $studentData);
    // var_dump($arrayMerge);
    
    // multidimensional array
    // $studentList = [ "name" => "Arham", "age" => "21", "city" => "Cox's Bazar", "gender" => "Male", "qualification" => "Honours"];
    
    // $arrayKeys = array_keys($studentList);
    // var_dump($arrayKeys);
    
    // $arrayExists = array_key_exists("name", $studentList);
    // var_dump($arrayExists);
    
    //  array_shift($studentInfo);
    //  print_r($studentInfo);
    
    // array_unshift($studentInfo, "Karim");
    // print_r($studentInfo);
    
    //  array_push($studentData, "Test");
    //  print_r($studentData);
    // array_pop($studentData);
    // print_r($studentData);

    // $arrayValues = array_values($studentData);
    // print_r($arrayValues);

    // array_map(function ($data){echo $data."<br/>";}, $studentData);
    
    //    $arrayUnique = array_unique($studentData);
    //     print_r($arrayUnique);

    // $arraySlice = array_slice($studentData, 2, 4);
    // print_r($arraySlice);
    
    // $arrayDiff = array_diff($studentData, $studentInfo);
    // print_r($arrayDiff);

    // $arraySearch = array_search("Unmarried", $studentData);
    // print_r($arraySearch);
    
    $studentData = ["Arham", "21", "Unmarried", "Honours"];

    $arrayReverse = array_reverse($studentData);
    print_r($arrayReverse);







    ?>