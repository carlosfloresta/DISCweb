<?php

//constantes



$databaseHost = 'localhost';
$databaseName = 'avalia21_disc'; 
$databaseUsername = 'avalia21_disc';
$databasePassword = 'hjKXr27LxzreRGR';

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

   

    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
//        echo "Conexao realizada com sucesso";
    }  


?>