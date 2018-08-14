<html>
    <head>
        <title>Lista de Planetas</title>
    </head>
    <body>
        <?php 
            $planetas = [
                'mercúrio',
                'vênus',
                'terra',
                'marte',
                'júpiter',
                'saturno',
                'urano',
                'netuno'
            ];
        ?>
<!-- código que cria um link para cada planeta do array -->
        <ul>
            <?php 
            //usamos ':' no lugar de chave
            foreach($planetas as $planeta): ?>
            <li>
                <a href="get.php?planeta=<?php echo $planeta ?>">
                    <?php echo $planeta ?>
                <a/>
            </li>
        <?php endforeach; ?>
        </ul>
    </body>
</html>