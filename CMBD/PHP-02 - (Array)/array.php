<?php 
    // php array
    $studentInfo = ["Arham", "21", "Unmarried", "Male", true, "Bangladeshi", "Honours"];
    // echo $studentInfo[3];
    // echo "<pre>";
    // var_dump($studentInfo);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($studentInfo);
    // echo "<pre/>";

    // for ($i = 0; $i < count($studentInfo); $i++) {
    //     echo $studentInfo[$i]. "<br/>";
    // }

    // foreach ($studentInfo as $value) {
    //     echo $value. "<br/>";
    // }


    // associative array
    // $studentData = [
    //     "name" => "Arham",
    //     "age" => "21",
    //     "maritalStatus" => "Unmarried",
    //     "gender" => "Male",
    //     "isStudent" => true,
    //     "nationality" => "Bangladeshi",
    //     "qualification" => "Honours"
    // ];

    // echo "<pre>";
    // var_dump($studentData);
    // print_r($studentData);
    // echo "</pre>";
    // foreach($studentData as $key => $val){
    //     echo $key . " = " . $val . "<br/>";
    // }

    // multidimensional array
    $studentList = [
        ["Arham", "21", "Cox's Bazar", "Male", "Honours"],
        ["Aiman", "21", "Chattogram", "Male", "Masters"],
        ["Alvi", "21", "Dhaka", "Male", "MBA"],
    ];
  
    // echo $studentList[2][2];
    // foreach ($studentList as $value) {
    //     foreach ($value as $key => $val) {
    //         if ($key == count($value) - 1) {
    //             echo $val;
    //         } else {
    //             echo $val. ", ";
    //         }
    //     } echo "<br/>";
    // }

    // foreach ($studentList as $student) {
    //     foreach ($student as $key => $value) {
    //         if ($key == count($student) - 1) {
    //             echo $value;
    //         } else {
    //             echo $value . ",";
    //         }
    //     } echo "<br />";
    // }

    // Bangladeshi division
    $bangldeshiCities = ["Dhaka", "Chattogram", "Rajshahi", "Khulna", "Barishal", "Sylhet", "Rangpur", "Mymensingh"];
?>
 <br>
 <br>

<select>
    <option>--Select your City</option>
    <?php foreach($bangldeshiCities as $cities ) {?>
    <option><?php echo $cities ?></option>
    <?php } ?>
</select>