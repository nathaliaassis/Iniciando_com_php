<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        var_dump($_POST);
        var_dump($_FILES);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document!</title>
  </head>
<body>
    <div class="container">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="">Nome: </label>    <br>
            <input type="text" name="nome" id=""> <br>
            <label for="">E-mail: </label> <br>
            <input type="email" name="email" id=""> <br>
            <label for="">Cor: </label> <br> 
            <input type="color" name="color" id=""> <br>
            <label for="">Data: </label> <br>
            <input type="date" name="date" id=""> <br>
            <label for="">Data e Hora: </label> <br>
            <input type="datetime" name="datetime" id=""> <br>
            <label for="">Enviar Arquivos: </label> <br>
            <input type="file" name="file" id=""> <br>
            <label for="">Número: </label> <br>
            <input type="number" name="number" id=""> <br>
            <input type="radio" name="radio" value="valor 1" id=""> <br>
            <input type="radio" name="radio" value="valor 2" id=""> <br>
            <input type="radio" name="radio" value="valor 3" id=""> <br>

            <input type="checkbox" name="" value="checked" id=""> <br>

            <input type="submit" value="enviar">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>