<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // se o campo idade for preenchido retorna o valor, senão retorna null
    //$idade = (isset($_POST['idade'])) ? $_POST['idade'] : null;

    // se o campo idade for preenchido recebe o valor, senão recebe null ( linha simplificada)
    $idade = $_POST['idade'] ?? null;

    if(is_null($idade)|| $idade === ''){
        die('A idade não foi informada');
    }

    $idade = (int)$idade;
    if($idade < 18){
        die ('Você é muito novo para isso');
    }

    echo 'Ok, sua idade é' . $idade;
    exit;
}   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="idade" placeholder="Idade " id="">
        <input type="submit" value="enviar">
    </form>    
</body>
</html>