<?php

$conn = new mysqli('localhost', 'root', 'root', 'iniciando_php');

if($conn->connect_errno){
    die('Falhou em conectar: (' . $conn->connect_errno . ') ' .  $conn->connect_error );
}

return $conn;