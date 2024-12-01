<?php
    $server = '143.106.241.4:3306';
    $user = 'cl204087';
    $pass = 'cl*22092004';
    $db = 'cl204087';

    $conn = new mysqli($server, $user, $pass, $db);

    if($conn->connect_error){
        die("Falha ao conectar " . $conn->connect_error);
    } 
?>
