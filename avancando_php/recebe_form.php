<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];

echo "<b>Nome: </b>" . $nome . "</br>";
echo "<b>E-mail: </b>" . $email . "</br>";
echo "<b>Interesses: </b> </br>";
echo "<ul>";
foreach($interesses as $interesse){
    echo "<li>". $interesse ."</li>";
}
echo "</ul>";
echo "<b>Onde Conheceu: </b>" . $onde_conheceu . "</br>";
echo "<b>Mensagem: </b>" . $mensagem . "</br>";
echo "<b>Redirecionamento: </b>" . $redirecionar . "</br>";