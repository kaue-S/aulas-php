<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
    <?php
    /* Nesta página, este array é desnecessário. */
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
        
            /* Em vez de colocar "disponibilidade não escolhida", por que não fez lá embaixo
            na lista simplesmente uma validação com if e empty? Assim nem precisaria mostrar o <li> caso
            a variável $disponivel esteja vazia. */
            $disponivel = isset($_POST['disponivel']) ? $_POST['disponivel'] : "Disponibilidade não escolhida";

            $mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_SPECIAL_CHARS);
            
            ?>
                <div>
                    <h1>Resultado</h1>
                    <ul>
                        <li>Nome do veiculo: <b><?= $nome ?></b></li>
                        <li>Fabricante: <b><?= $fabricante ?></b></li>
                        <li>Preço: <b><?= number_format($preco, 2, ',', '.') ?></b> </li>
                        <li>Disponibilidade: <b><?= $disponivel ?></b></li>
                        <li>mensagem: <b><?= $mensagem ?></b> </li>
                    </ul>
                </div>
    <?php
       }
    }
    ?>
</body>
</html>
