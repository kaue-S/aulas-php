<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recebendo os dados</h1>
    <hr>
    <?php

    //  $carros = [
    //     "volvo",
    //  "Porsche",
    //     "Mercedes",
    //     "Audi",
    //  ];

    if ( empty($_POST["nome"]) || empty($_POST["preco"]) ) {?>
    <p>Por favor, preencha todos os campos</p>
    <p><a href="exercicio-07.html">Voltar</a></p>

    <?php
    } else {
        $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
        $marca = filter_var($_POST['carros'], FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_var($_POST['preco'], FILTER_SANITIZE_NUMBER_FLOAT);
        // $disponivel = filter_var($_POST['disponivel'], FILTER_SANITIZE_NUMBER_FLOAT);
        $disponivel = isset($_POST['disponivel']) ? $_POST['disponivel'] : "";
        $mensagem =filter_var($_POST['mensagem'], FILTER_SANITIZE_SPECIAL_CHARS);


        if (empty($disponivel)) {?>
            <p style="color:red">Por favor, selecione a disponibilidade.</p>
            <p><a href="exercicio-07.html">Voltar</a></p>
        <?php
             }else{ 
        ?>
    <div>
        <ul>
            <li>Nome do veiculo: <?= $nome ?></li>
            <li>Marca:<?= $marca ?> </li>
            <li>Preço: <?= $preco ?></li>
            <li>Disponibilidade: <?=$disponivel?></li>
            <li>mensagem: <?= $mensagem ?></li>
        </ul>
    </div>
<?php
    }   
     }
?>

</body>
</html>
