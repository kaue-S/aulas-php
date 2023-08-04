<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <style>
        .aprov{
            color: green;
        }

        .reprov{
            color: red;
        }
    </style>
</head>
<body>  
    <h1>Exercicio 05</h1>
    

    <?php
        $alunos = ["João", "Igor", "Paula", "Maria", "claudia"];
    ?>

    <?php
        function calculo(float $nota1, float $nota2):float {
            $media = ($nota1 + $nota2)/2;
            return $media;
        }

       $calculaMedia = calculo(7, 7)
    ?>

    <?php 
        function resultado($media){
            if($media >= 7){
                return "<b class='aprov'>Aprovado!</b>";
            } else {
                return "<b class='reprov'>Reprovado!</b>";
            }
        }
    ?>
    
    <p>Nome do aluno: <?=$alunos[0]?></p>
    <p>Media: <?=$calculaMedia?></p>
    <p>Situação: <?=resultado($calculaMedia)?></p>

</body>
</html>