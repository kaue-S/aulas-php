<?php
    /*Fazendo a inclusão de um arquivo de recursos*/
    include "recursos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularização e inclusão de Recursos</title>
</head>
<body>
    <h1>Modularização e inclusão de Recursos</h1>
    <hr>

    <h2><?=ESCOLA?></h2>
    <p>Estamos fazendo o curso de <?=$curso?></p>
    
    <ul>
        <li><?=$tecnologias[0]?></li>
        <li><?=$tecnologias[1]?></li>
        <li><?=$tecnologias[2]?></li>
        <li><?=$tecnologias[3]?></li>
    </ul>

    <ul>
        <?php foreach($tecnologias as $tecnologia){?>
        <li><?=$tecnologia?></li>

    <?php } ?>
    </ul>

    <p>O aluno fulano tem 20 anos e é <?=verificaIdade(20)?></p>
    <hr>

    <article>
        <h2>titulo qualquer</h2>
        <?php
            include "textos.php"
        ?>
    </article>

    <section>
        <?php
            include "listas.php"
        ?>
    </section>
</body>
</html>