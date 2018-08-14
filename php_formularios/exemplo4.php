<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = filter_input(INPUT_POST, 'nome');
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        var_dump($nome);        
        var_dump($idade);        
        $data = filter_input_array(INPUT_POST);

        var_dump($data);
        
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="">Nome: </label>    <br>
        <input type="text" name="nome" id=""> <br>
        <label for="">Idade: </label>    <br>
        <input type="text" name="idade" id=""> <br> <br>
        <input type="submit" value="enviar">
</body>
</html>