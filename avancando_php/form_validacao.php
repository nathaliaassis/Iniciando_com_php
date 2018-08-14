<!doctype html>
<html lang="pt">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Formulário</title>
    </head>
    <body>
        <div class="container">
            <h1>Formulário com PHP - Validação</h1>
            <form action="recebe_form_validacao.php" method="post">
                <label>Nome: </label> <br>
                <input type="text" name="nome"> <br>

                <label>E-mail: </label> <br>
                <input type="text" name="email"><br> <br>

                <fieldset>
                    <legend>Área de Interesse</legend> 
                    <input type="checkbox" name="interesse[]" value="informatica"> Informática</br>
                    <input type="checkbox" name="interesse[]" value="esporte"> Esporte</br>
                    <input type="checkbox" name="interesse[]" value="moda"> Moda</br>
                    <input type="checkbox" name="interesse[]" value="ciencia"> Ciência</br>
                    <input type="checkbox" name="interesse[]" value="religiao"> Religião</br>
                </fieldset>
                <br>
                <label>Onde Conheceu? </label> <br>
                <select type="text" name="onde_conheceu">
                    <option value=" ">Selecione</option>
                    <option value="internet">Internet</option>
                    <option value="tv">TV</option>
                    <option value="amigos">Amigos</option>
                </select>
                <br>    <br>
                <label>Mensagem</label> <br>
                <textarea name="mensagem" cols="30" rows"10"></textarea>

                <br> 
                
                <fieldset>
                    <legend>Redirecionar para:</legend>
                    <input type="radio" name="redirecionar" value="home">Home</br>
                    <input type="radio" name="redirecionar" value="contato"> Contato</br>
                </fieldset>
                <br>
                <button type="submit">Enviar</button>
            </form>        
        </div>    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
