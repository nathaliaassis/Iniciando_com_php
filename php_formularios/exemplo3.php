<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nome = $_POST['nome'] ?? null;

        $nome = trim($nome);
        // htmlspecialchars irá converter caracteres para entidades que afetam o HTML
        $nome = htmlspecialchars($nome);
        //pular as \\
        $nome = stripslashes($nome);
        var_dump($nome);
        
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
        <input type="submit" value="enviar">
</body>
</html>