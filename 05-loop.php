<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Loop</h1>

    <h2>WHILE (enquanto)</h2>

    <?php
    $i = 1;

    while ($i <= 5) {
    ?>
        <p><?= $i ?></P>
    <?php
        $i++; //$i = $i + 1
    }

    ?>

    <h2>Do/while (repita/até)</h2>

    <?php
    $j = 1;
    do {
    ?>
        <div>
            <h3>Titulo...</h3>
            <p>Lorem ipsum dolor sit amet. </p>
        </div>
    <?php
        $j++;
    } while ($j <= 10);
    ?>

    <h2>For (para)</h2>
    <?php
    //variavel de controle; condição; atualização
    for ($i = 1; $i <= 3; $i++) {
    ?>

        <P><code>i</code>Vale: <b><?= $i ?></b></P>
    <?php
    }
    ?>


    <h1>Mini exercicio</h1>

    <?php
    $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "Junho", "Julho", "agosto", "setembro", "outubro", "novembro", "Dezembro"];
    ?>

    <ol>
        <?php
        $i = 0;

        while ($i < 12) {
        ?>
            <li><?= $meses[$i] ?></li>

        <?php
            $i++;
        }
        ?>
    </ol>

    <!-- fim do exercicio -->

    <!-- exemplo utilizando comando count -->
    <?php
    $alunos = [
        "melissa", "zimbo", "kauê", "Eduardo", "tanaka", "igor", "joao"
    ];

    $quantidade = count($alunos);

    for ($i = 0; $i < $quantidade; $i++) {
    ?>
        <P>Nome: <b><?= $alunos[$i] ?></b></P>

    <?php
    }
    ?>
    <!-- fim -->


    <h2>FOREACH</h2>
    <p>Útil (e mais fácil) para lidar com <code>arrays</code>.</p>

    <ol>
        <?php foreach ($meses as $mes) { ?>
            <li><?= $mes ?></li>

        <?php    } ?>
    </ol>

    <?php
    $clubes = [
        "Corinthians" => "timão",
        "Palmeiras" => "porco",
        "São Paulo" => "Tricolor",
        "Santos" => "peixe",
    ];

    foreach ($clubes as $clube => $apelido) {
    ?>
        <p>O <?= $clube ?>é conhecido como <?= $apelido ?>.</p>
    <?php
    }
    ?>


    <h2>loop com matriz</h2>

    <?php
        $planoDeEstudos = [
            ["HTML", "CSS", "JS"],
            ["React", "react native"]
        ];

        for($linha = 0; $linha < count($planoDeEstudos); $linha++){
            for($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
                ?>        
            <P><b><?=$planoDeEstudos[$linha][$coluna]?></b></P>    
        <?php
            }
        }
    ?>
    <hr>
    <?php 
        //usando foreach aninhado
        foreach($planoDeEstudos as $linha){
            foreach($linha as $coluna){
        ?>

            <p><i><?=$coluna?></i></p>
    <?php
            }
    
        }
    ?>

    <?php
        $clientes = [
            [
                "nome" => "Chaves",
                "idade" => 8
            ],
            [
                "nome" => "Chapolin",
                "idade" => 25
            ],
            [
                "nome" => "Chiquinha",
                "idade" => 10
            ]
        ];

        foreach($clientes as $cliente){
    ?> 
        <p>Nome: <?=$cliente['nome']?></p>
        <p>Idade: <?=$cliente['idade']?></p>
    <?php
        }
    ?>

</body>

</html>