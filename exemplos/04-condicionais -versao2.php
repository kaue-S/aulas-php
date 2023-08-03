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
    <h1> versoa 2 Condicionais php</h1>

    <?php
        $numero = 5;
        if($numero > 1){
       ?>
        <p><?=$numero?>è maior que 1</p>
        
        <?php
        }if($numero > 1)echo "<p>$numero é maior que 1</P>";

        ?>

    <?php

        $produto = "Ultrabook Asus";
        $qtdEmEstoque = 0; //o que temos
        $qtdCritica = 15;   // minimo necessário
    ?>
        <h3><?=$produto?></h3>

        <h4>Quantidade em estoque: <?=$qtdEmEstoque?></4>
    
    <?php
        if($qtdEmEstoque < $qtdCritica){
    ?>
        <p class="comprar"> è necessário comprar!</p>
            
    <?php  // Condicional aninhada
        if($qtdEmEstoque == 0){
    ?> 
        <p class="urgente">Urgente!</p>

    <?php
        }
    }else {

    ?>
            <p class="normal">Estoque normal</p>
    <?php
        }
    ?>

    <h2>Encadeada versao 2</h2>

    <?php
        /* Opções para o exemplo

        1 -> Lanche
        2 -> Pizza
        3 -> Paçoca

    qualquer outra -> Opção inválida */

    $opcaoEscolhida = 2;
    ?>

    <?php
        if($opcaoEscolhida == 1){
            $mensagem = "Ok, Vamos fazer o lanche!";
        } elseif($opcaoEscolhida == 2){
            $mensagem = "Beleza, pizza no forno...";
        }elseif($opcaoEscolhida == 3){
            $mensagem = "Professor ficou feliz!";
        }else{
            $mensagem = "Não Entendi... vou chamara valeska";
 
        }
 
    ?>

        <P><?=$mensagem?></P>


    <?php
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