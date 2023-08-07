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
    <h3>implode()</h3>
    <?php
        //função que transforma array em string
        $bandas = ["Rush", "Slayer", "Dio"];
        $textoBandas = implode(" - ", $bandas);
    ?>

    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>

    <h3>extract()</h3>
    <?php
        //Função que exrtrai chaves associativas para variáveis
        $aluno = [
            "id" => 1,
            "nome" => "Chaves do 8",
            "idade" => 25
        ];
    extract($aluno);
    ?>
    <ul>
        <li>ID: <?=$id?></li>
        <li>Nome: <?=$nome?></li>
        <li>Idade: <?=$idade?></li>
    </ul>

    <h3>array_sum()</h3>
    <?php
        //Função para somar os valores de um array
        $total = array_sum($valores);
    ?>
    <p>Soma dos valores: <?=$total?></p>

    <h3>array_unique()</h3>
    <?php
        //função que retorna um novo array com dados únicos
        $produtos = [
            "TV", "Notebook", "TV", "Geladeira", "Monitor", "Notebook",
            "Teclado", "Mouse"
        ];

        $produtosUnicos = array_unique($produtos);
    ?>
    <pre><?=var_dump($produtos)?></pre>
    <pre><?=var_dump($produtosUnicos)?></pre>


    <hr>
    <h2>Filtros</h2>

    <h2>Segurança</h2>

    <h3>validação</h3>
    <?php
        $email = "tiago.com.br";
        //
    ?>
    <pre>
        <?=var_dump( filter_var($email, FILTER_VALIDATE_EMAIL))?>
    </pre>

    <h3>Sanitização</h3>
    <?php
        $ataque = "<script>
            document.body.innerHTML = '<H1>Sou hacker:</H1>';
        </script>";
    //execução sem sanitização (script é valido)
        // echo $ataque;
    
        $ataqueSanitizado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

        //execução com sanitização
        echo "$ataqueSanitizado";
    ?>
</body>
</html>