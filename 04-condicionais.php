<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais php</title>
    <style>
        .comprar, .urgente{
            color: red;
        }

        .urgente{
            font-weight: bold;
            background-color: yellow;
            width: 80px;
        }
        .normal{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Condicionais php</h1>
    <?php

        $produto = "Ultrabook Asus";
        $qtdEmEstoque = 0; //o que temos
        $qtdCritica = 15;   // minimo necessário

        echo "<h3>$produto</h3>";
        echo "<h4>Quantidade em estoque: $qtdEmEstoque</4>";

        if($qtdEmEstoque < $qtdCritica){
            echo "<p class='comprar'> è necessário comprar!";
            
            // Condicional aninhada
            if($qtdEmEstoque == 0){
                echo "<p class='urgente'>Urgente!</p>";
            }

        }else{
            echo "<p class='normal'>Estoque normal</p>";

        }

    ?>

    <h2>Encadeada</h2>

    <?php
        /* Opções para o exemplo

        1 -> Lanche
        2 -> Pizza
        3 -> Paçoca

    qualquer outra -> Opção inválida */

    $opcaoEscolhida = 1;

    if($opcaoEscolhida == 1){
        echo "<p>Ok, Vamos fazer o lanche!</p>";
    }elseif($opcaoEscolhida == 2){
        echo "<p>Beleza, pizza no forno...</p>";
    }elseif($opcaoEscolhida == 3){
        echo "<p>Professor ficou feliz!</p>";
    }else{
        echo "<p>Não Entendi... vou chamara valeska</p>";
    }


    // exemplo: == e ===
    $a = 10;
    $b = 10;
    $resultado = $a == $b;
    var_dump($resultado);
    echo "<br>";
    var_dump($a);
    echo "<br>";
    var_dump($b);
    ?>
    
</body>
</html>