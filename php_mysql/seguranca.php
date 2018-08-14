<?php

$email = $_GET['email'] ?? null;

$conn = new mysqli('localhost', 'root', 'root', 'iniciando_php');

$result = $conn->multi_query('INSERT INTO users (email) VALUES ("'. $email .'")');