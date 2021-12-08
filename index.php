<?php
    include('dane1.php');
    echo $a."<br>";

    if(file_exists('dane2.php')) echo filesize('dane2.php')."<br>";
    else echo "Plik dane2.php nie istnieje<br>";

    if(@mkdir('nowy')) echo "Stworzono katalog nowy";
    header('Location: dane1.php');
    while(true){
        echo "1";
    }
    echo "to sie nie wykona";
?>