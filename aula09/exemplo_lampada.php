<?php
    include_once 'Lampada.class.php';
    
    $lamp1 = new Lampada();
    // var_dump($lamp1);

    $lamp1->Fabricante = "Philips";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 50;
    $lamp1->Cor = "Branca";

    $lamp1->Mostrar_Dados();
    $lamp1->ligar();
    echo"<br>";
    echo"Ligar Lâmpada <br>";
    echo"<br>";
    $lamp1->Mostrar_Dados();


?>