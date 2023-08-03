<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>manipular dados na memória</h1>
    <hr>

<?php
// variáveis

// string
$curso = "Téc. em Informática para internet";

// inteiro
$ano = 2013;

// real
$preco = 2500.25;

echo "<h2>Saida de dados usando echo na sintaxe completa</h2>";

echo $curso;

echo "<p>$curso</p>"; //interpolação
echo "<p>.$curso.</p>"; //concatenação

echo "<p>Ano letivo: $ano</p>";
echo "<p><b>Preço</b>: $preco</p>";

?>

<h2>Saída de dados usando sintaxe simplificada</h2>
<p> <?php echo $curso ?> </p>
<p> <?=$curso?></p>

<p>Estamos fazendo o curos <?=$curso?> no ano de <?=$ano?>.</p>

<?php
    //Constantes

    // 1º forma: usando a função define()
    define("MEU_NOME", "Kauê Evangelsita");

    // 2ª forma: usando a palavra-chave const

    const UNIDADE = "Penha";

    // Saida de dados constantes
    echo MEU_NOME;
    echo "<p><b>".MEU_NOME."</b></p>"
?>

<P></P>
</body>
</html>