<?php 
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "etec" and $password == "informatica")
    echo "successfully logged in";
else
    echo "Username or password is wrong"

?>