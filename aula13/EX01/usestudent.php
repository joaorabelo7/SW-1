<?php

    include_once 'Student.class.php';

    $student = new Student("Julio", 10,7);

    $note1 = $student->getNote1();
    $note2 = $student->getNote2();
    $name = $student->getname();
    $media = $student->CalcMedia($note1,$note2);
    echo "Nmae: ". $name . "<br>";
    echo "Média: " . $media . "<br>";
    echo "Situation: " . $student->VerifySituation($media) . "<br>";


?>