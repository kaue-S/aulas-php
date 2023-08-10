<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
    
    <?php
    $fabricantes = ["Volvo", "Porsche", "Mercedes", "Ferrari"];
    /* Interessante esta forma de detectar o acionamento do formulário.
    É uma maneira válida também. */
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["nome"]) || empty($_POST["preco"])) { ?>
            <p>Por favor, preencha todos os campos</p>
            <p><a href="exercicio-07.html">Voltar</a></p>
    
            <?php
    
        } else {
            $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
            $fabricante = filter_var($_POST['fabricante'], FILTER_SANITIZE_SPECIAL_CHARS);

            /* Aqui no $preco, o ideal é sanitizar e usar mais outro filtro para permitir dígitos/casas
            decimais. */
            $preco = filter_var($_POST['preco'], FILTER_SANITIZE_NUMBER_FLOAT);
            $mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_SPECIAL_CHARS);
            
            ?>
                <div class="container w-25">
                    
                    <ul class="bg-ligth shadow mt-5 rounded list-unstyled p-5 fs-3">
                        <h1 class="pb-3 pt-0">Resultado</h1><hr>
                        <li class="p-1">Nome do veiculo: <b class="text-sm-rigth"><?= $nome ?></b></li>
                        <hr>
                        <li class="p-1">Fabricante: <b><?= $fabricante ?></b></li>
                        <hr>
                        <li class="p-1">Preço: <b><?= number_format($preco, 2, ',', '.') ?></b> </li>
                        <hr>
                        <?php
                            if (isset($_POST['disponivel'])) {
                                $disponivel = $_POST['disponivel'];?>
                                <li class="p-1">Disponibilidade: <b> <?=$disponivel?> </b></li><hr>
                                <?php
                            } else {
                                $disponivel = array();
                            }
                            ?>
                        <li class="p-1">Mensagem: <b><?= $mensagem ?></b> </li>
                        <hr>
                        <button class="btn btn-primary d-flex m-auto"><a class="list-unstyled text-white text-decoration-none" href="formulario-07.php">Voltar</a></button>
                    </ul>
                </div>
    <?php
       }
    }
    ?>
</body>
</html>
