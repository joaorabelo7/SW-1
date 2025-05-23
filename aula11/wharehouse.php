<?php
include_once "Wharehouse.class.php";

$product = new Wharehouse("Mouse", 150.00,10);
$product->Add(5);
$product->Remove(3);
$product->Show_details();



?>