<?php
    include_once "Employee.class.php";

    $employee = new Employee("Rabelo", 2000);

    $employee->up_salary(10);

    echo $employee->show_informations();
?>
