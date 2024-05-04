<?php 

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){

 $userName = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $message = $_POST['message'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $color = $_POST['color'];
 $url = $_POST['url'];
 $month = $_POST['month'];
 $ip = $_POST['ip'];
 $range = $_POST['range'];
 $search = $_POST['search'];
 $localDate = $_POST['localDate'];
 $courses = $_POST['courses'];
 foreach($courses as $course){
    echo $course . ' ';
 }; 
 echo '<br/>';
 $img = $_FILES['file']['type'] ?? null;
 $exImg = explode('/', $img);
 var_dump($exImg[1]);
 echo '<br/>';
 echo '<br/>';
 echo $userName . '<br/>' . $email . '<br/>' . $password . '<br/>' . $message . '<br/>' . $date . '<br/>' . $time . '<br/>' . $color . '<br/>' . $url . '<br/>' . $month . "<br/>" . $ip . '<br/>' . '<br/>' . $range . '<br/>' . $search . '<br/>' . $localDate . '<br/>';

}



?>