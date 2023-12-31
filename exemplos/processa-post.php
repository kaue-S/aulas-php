<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>

<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>

   
    <?php
    // Verificar se os campos: nome e email estão vazios
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
    ?>
        <p>Você deve preencher nome e e-mail</p>
        <p><a href="10-formulario.html">Voltar</a></p>

    <?php
    } else {
        $nome = filter_var ($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var ($_POST['email'], FILTER_SANITIZE_EMAIL);
        $idade = filter_var ($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);
        $mensagem = filter_var ($_POST['mensagem'], FILTER_SANITIZE_SPECIAL_CHARS);

        // Se houver interesses (ou seja, foi selecionado pelo menos 1)
        // guarde na variável $interesses. Caso contrário, guarde um array vazio.

        if (isset($_POST['interesses'])) {
            $interesses = filter_var_array($_POST['interesses']);
        } else {    
            $interesses = array();
        }

        if (empty($interesses)) {?>
            <p style="color:red">Por favor, selecione pelo menos um interesse.</p>
            <p><a href="10-formulario.html">Voltar</a></p>
    <?php        
        } else {
    ?>
            <h2>Dados</h2>
            <ul>
                <li>Nome: <?= $nome ?></li>
                <li>E-mail: <?= $email ?></li>
                <li>Idade: <?= $idade ?></li>
                <li>Interesses: <?= implode(", ", $interesses) ?></li>
                <li>Mensagem: <?=$mensagem?></li>
            </ul>
    <?php
        }
    }
    ?>

</body>

</html>
