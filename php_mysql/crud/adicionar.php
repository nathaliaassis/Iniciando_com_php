<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conn = require 'connection.php';

        $email = $_POST['email'] ?? null;
    
        $stmt = $conn->prepare('INSERT INTO users (email) VALUES (?)');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        //redicireciona o usuário para a página inicial
        header('location: /crud');
        die(); //nada desse comando para baixo será executado
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>

    <div class="container" style="width: 500px;">
        <h1>Adicionar Usuário</h1>
        <form action="adicionar.php" method="post">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email"> <br>
            <button type="submit" class="btn btn-success">Enviar </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous">
    </script>
</body>

</html>