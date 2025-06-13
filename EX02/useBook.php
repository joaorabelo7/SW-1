<?php

    include_once "Book.class.php";

    $book = new Book("Iracema", "José de Alencar", true);

    // echo "<pre>";
    // print_r($book);
    // echo"</pre>";
    echo "Book status is: ";
    echo $book->showStats();
    echo "<hr>";

    echo "A loan was made :";
    echo $book->to_loan();
    echo"<hr>";
    
    
    echo "Book status is: ";
    echo $book->showStats();
    echo "<hr>";
    
    echo "A loan was made :";
    echo $book->to_loan();
    echo"<hr>";

    echo "Book status is: ";
    echo $book->showStats();
    echo "<hr>";
    
    echo "Making a return: ";
    echo $book->return_book();
    echo"<hr>";

    echo "Book status is: ";
    echo $book->showStats();
    echo "<hr>";
    ?>