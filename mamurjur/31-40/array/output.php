<?php 
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $allField = $_POST['field_name'];
    // var_dump($allField);

    // foreach($allField as $key){
    //     echo $key;
    // }
    for($i = 0; $i < count($allField); $i++){
        echo $allField[$i] . '<br/>';
    }
}

?>