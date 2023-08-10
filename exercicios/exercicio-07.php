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
    $fabricantes = ["Volvo", "Porsche", "Mercedes", "Ferrari"];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["nome"]) || empty($_POST["preco"])) { ?>
            <p>Por favor, preencha todos os campos</p>
            <p><a href="exercicio-07.html">Voltar</a></p>

            <?php

        } else {
            $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
            $fabricante = filter_var($_POST['fabricante'], FILTER_SANITIZE_SPECIAL_CHARS);
            $preco = filter_var($_POST['preco'], FILTER_SANITIZE_NUMBER_FLOAT);
            $disponivel = isset($_POST['disponivel']) ? $_POST['disponivel'] : "Disponibilidade não escolhida";
            $mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_SPECIAL_CHARS);
            
            ?>
                <div>
                    <ul>
                        <li>Nome do veiculo: <?= $nome ?></li>
                        <li>Fabricante:<?= $fabricante ?> </li>
                        <li>Preço: <?= number_format($preco, 2, ',', '.') ?></li>
                        <li>Disponibilidade: <?= $disponivel ?></li>
                        <li>mensagem: <?= $mensagem ?></li>
                    </ul>
                </div>
    <?php
       }
    }
    ?>
</body>
</body>

</html>