<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRocessamento POST</title>
</head>

<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Recebetr e processar dados via <b>POST</b></p>

   
    <?php
    //Verificar se os campos: nome e email estão vazios
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
    ?>
        <p>Você deve preencher nome e -mail</p>
        <p><a href="10-formulario.html">Voltar</a></p>

    <?php
        } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $mensagem = $_POST['mensagem'];
        /*se houver interesses (ou seja, foi selecionado pelo menos 1), guarde na variável o $_post["interesses"]. caso contrário, guarde na variável um array vazio */
        $interesses = $_POST['interesses'];

    ?>
      <!-- <p>interesses: <?= implode (", ", $interesses) ?></p> -->

        <h2>Dados</h2>

        <ul>
            <li>Nome: <?= $nome ?></li>
            <li>E-mail: <?= $email ?></li>
            <li>Idade: <?= $idade ?></li>
            <li>interesses: <?= implode (", ", $interesses) ?></li>


            <!--se a variavel mensagem NÃO estiver vazia, mostre o <li> com a mensagem -->
            <?php if (!empty($mensagem)) { ?>
                <li>Mensagem: <?= $mensagem ?></li>
            <?php } ?>
            
        </ul>
    <?php 

    }
    ?>
</body>
</html>