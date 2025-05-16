<?php

    include_once "Account.class.php";

    $account_1 = new Account();


    $account_1->Name = "João Henrique";
    $account_1->Cpf = "522.432.123-90";
    // $account_1->Balance = 500;

    $account_1->ConsultBalance();
    echo"<hr>";
    echo $account_1->deposit(300);
    echo"<hr>";
    $account_1->ConsultBalance();
    echo"<hr>";
    echo$account_1->Withdraw(150);
    echo"<hr>";


?>