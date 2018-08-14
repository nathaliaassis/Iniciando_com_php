<?php 
    $conn = require 'connection.php';

    $id = $_GET['id'] ?? null;

    $stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $user = $result->fetch_assoc();

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

    <div class="container-fluid">
        <div class="alert alert-primary" role="alert">
            <h1>
                <?php echo $user['email']?>
            </h1>
            <p>O ID desse usuário é
                <?php echo $user['id']?>
            </p>
            <p style="display: inline-block">
                <a href="editar.php?id=<?php echo $user['id'];?>" class="badge badge-dark"> Editar</a>
                <a href="remover.php?id=<?php echo $user['id'];?>" class="badge badge-danger"> Remover</a>
            </p>
            <br>
            <a href="index.php"> <button type="button" class="btn btn-primary">Voltar</button> </a>
        </div>
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