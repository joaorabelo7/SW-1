<link rel="stylesheet" href="exercise.css">

<?php
    $name = $_POST['cxname'];
    $age = $_POST['cxage'];
    
    if ($age >= 18){
     echo "Hello, $name you have legal age";
    }else{
        echo "Hello, $name you dont have legal age";
    }


?>
<br>


<button class = "back-btn-php">
    <a href="exercise01.html" >Back</a>
</button>
