<?php

$conn = new mysqli('localhost', 'root', 'root', 'iniciando_php');

if($conn->connect_errno){
    die('Falhou em conectar: (' . $conn->connect_errno . ') ' .  $conn->connect_error );
}
// echo $conn->host_info;

// echo '<br>';

$sql = 'CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
)';

if(!$conn->query($sql)){
    echo 'Tabela users já existe!';
};

echo '<br>';

// $result = $conn->query('INSERT INTO users (email) VALUE  ("nathalia@email.com")');


$result = $conn->query('SELECT * FROM users');

echo '<ul>';

$users = $result->fetch_all();

foreach($users as $user){
    echo $user[0] . ' - ' . $user[1] . '</br>';
} 


