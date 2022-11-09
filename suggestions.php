<?php
    $existing_names = ["Raph", "Mario", "Luigi", "Yoshi"];

    if(isset($_POST["suggestion"])){
        $name = $_POST['suggestion'];

        if(!empty($name)){
            foreach ($existing_names as $existing_name){
                if(strpos($existing_name, $name) !== false){
                    echo $existing_name . "<br>";
                }
            }
        }
    }
?>