<?php
    include_once "Rectangle.class.php";


    $rectangle = new Rectangle(10,20);

    echo $rectangle->calcArea();
    echo "<br>";
    echo $rectangle->calcPerimeter();
?>