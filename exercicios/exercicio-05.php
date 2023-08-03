<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>
    <h1>Exercicio 05</h1>

    <?php
        $alunos = ["João", "Igor", "Paula", "Maria", "claudia"];
    ?>

    <?php
        function calculo(float $nota1, float $nota2) {
            $media = ($nota1 + $nota2)/2;
            return $media;
        }

       $situacao = calculo(7, 7)
    ?>

    <?php 
        function resultado($media){
            if($media >= 7){?>
            <b style="color:green">Aprovado!</b>
    <?php
            } else {?>
              <b style="color:red">Reprovado!</b>
    <?php          
            }
        }
    ?>
    <p>Nome do aluno: <?=$alunos[0]?></p>
    <p>Media: <?=$situacao?></p>
    <p>Situação: <?=resultado($situacao)?></p>

</body>
</html>