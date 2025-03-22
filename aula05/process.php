<?php
    $user_email = $_POST ['user_email'];
    $user_password = $_POST ['user_password'];
    $user_first_name = $_POST['user_first_name'];
    $user_second_name = $_POST['user_second_name'];
    $user_full_name = $user_first_name ." ". $user_second_name;

    if($user_email == 'rabelo777@gmail.com' && $user_password == '123'){
        //Go to private.php
        $name = $_POST ['user_first_name'];
        header("Location: private.php?user_name=".$user_full_name);
    }else{
        //Go to error.php
        header('Location: error.php');
    }



?>