<?php 
// class myClass {
//     public $name = 'Arham';
// }


// $obj = new myClass;
// echo $obj->name;

// class inhClass extends MyClass {
//     public $age = 20;

//     public function myFunction() {
//          return $this->name . " " . $this->age;
//     }

// }

// $obj = new inhClass;
// echo "<br/>";
// echo $obj->myFunction();


class myClass {
    public $name = 'Arham';
    protected $gender = 'Male';
    private $email = 'abc@example.com';

    public const dob = "11-12-2003";

    public function accessFunction() {
        return $this->name . ' ' . $this->gender . ' ' . $this->email;
    }

    public function __construct()
    {
        echo "</br> echo this is construct function";
    }
    public function __destruct(){
        echo "</br>echo this is destruct function";
    }
}


$obj = new myClass;

echo $obj->name;
echo "<br/>";
echo $obj->accessFunction();
echo "<br/>";
echo myClass::dob;
echo "<br/>";
echo $obj::dob;

class inhClass extends MyClass {
    public $age = 20;

    public function myFunction() {
         return $this->name . " " . $this->age . " " . $this->gender;
    }

}

$obj = new inhClass;
echo "<br/>";
// echo $obj->myFunction();

?>