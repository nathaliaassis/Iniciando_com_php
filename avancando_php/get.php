<?php

//isset(); verifica se a variável foi definida
// se planeta verdadeiro então (?) pega planeta else (:) retorna falso 
$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false){
    echo $planeta;
}else{
    echo "planeta não encontrado";
}
// echo "<br>";
// //se cor existir retorna cor ?? senão retorna frase
// $cor = $_GET['cor'] ?? "Cor não informada";

// echo $cor;