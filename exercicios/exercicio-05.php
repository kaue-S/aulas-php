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
        // $nota1 = 8;
        // $nota2 = 7;


        function calculo(float $nota1, float $nota2) {
            $media = ($nota1 + $nota2)/2;
            return $media;
        }

       $situacao = calculo(8, 7)

       
    ?>

    <p><?=$situacao?></p>

</body>
</html>