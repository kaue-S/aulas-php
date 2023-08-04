<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>Trim()</h3>
    <?php
        //função para remover espaços antes e depois de strings
        $nome = "    vinicius me deve 80 paçocas       ";
        $nomeSemEspaco = trim($nome);
    ?>
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>
    <?php
    //Função que permite substituição de strings/caractéres.
    $fraseFeia = "Fulano é um bobão e xarope";
    $fraseFiltrada = str_replace(
        ["xarope", "bobão"],
        "******",
        $fraseFeia
    );
    ?>
    <p><?=$fraseFeia?></p>
    <p><?=$fraseFiltrada?></p>

    <h3>explode()</h3>
    <?php
        //Função que transforma uma string em um array
        $linguagens = "HTML - CSS - JS - PHP";
        $arrayLinguagens = explode(" - ", $linguagens);
    ?>
    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>
    <hr>

    <h2>numéricas</h2>
    <h3>min, max</h3>
    <?php
        $valores = [10, 5, 50, 275];
        $valorQualquer = 1259.75;
    ?>
    <p>Menor valor: <?=min($valores)?></p>
    <p>maior valor: <?=max($valores)?></p>
    <p>Arredondamento: <?=round($valorQualquer)?></p>
    <hr>


    
    <h2>Arrais</h2>

    <h2>Filtros</h2>

    <h2>Segurança</h2>
</body>
</html>