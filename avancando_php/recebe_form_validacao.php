<?php
//se tiver apenaas espaços o trim não deixa passar no formulário
$nome = trim($_POST["nome"]);

//se tiver marcado, volta o interesse / se não tiver, volta null 
$interesses  = $_POST['interesse'] ?? null; 

//evita tags html, php, js no campo de mensagem
$mensagem = strip_tags($_POST["mensagem"]);
// condição para : se o nome estiver vazio informar o nome
if(empty($nome)){
    echo "informe o nome <br>";

    // return false;
}else{
    echo $nome;
}

//se interesses marcados for null, retorna a mensagem

if(is_null($interesses)){
    echo "Selecione ao menos um item de interesse!<br>";

    // return false;
}
