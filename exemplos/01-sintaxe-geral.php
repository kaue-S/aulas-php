<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe geral </title>

    <style>
        p{ font-family: "Verdana";}
        .destaque{ text-transform: uppercase;}
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>
    
    <?php
        // Geração de texto (string)
        echo "<p class='destaque'>Hoje tem Corinthians!</p>";

        echo "Hoje tem Corinthians";

        // Geração de texto estruturado (com tags, atributos)
        echo "<h2>Gerando HTML através do PHP</h2>";

        // css inline
        echo "<p style=\"color:red\">O vinicius está reprovado!</p>";
        echo "<p style='color:orange'>O vinicius está reprovado!</p>";
        echo '<p style="color:pink">O vinicius está reprovado!</p>';

        // Classes CSS
    ?>

    <script>
        let destaque = document.querySelector(".destaque");
        console.log(destaque);
    </script>
</body>
</html>