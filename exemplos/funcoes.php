<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como procedimento ou rotina</h2>

    <?php
        function dadosAutor(){
            echo "<div>";
            echo "<p> Kauê Evangelista da Silva Aguiar</p>";
            echo "<p><a href=''>email@aa.com</a></p>";
            echo "</div>";
        }
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>

        <?=dadosAutor()?>

        <article>
            <h4>Outra chamada</h4>
            <?=dadosAutor()?>
        </article>
    </section>

    <h2>Função com retorno de dados</h2>

    <?php
        function dadosCurso(){
            return "Téc. informática para internet";
        }
    ?>

    <p>estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?>é ministrado no Senac Penha.</p>
    <hr>

    <h2>Função com parâmetros (ou argumentos)</h2>

    <?php
        function soma( $valor1, $valor2, $valor3 ){
            //variável de escopo local
            $total = $valor1 + $valor2 + $valor3;
            return $total;
        }
    ?>
    <!-- chamando e exibindo retorno -->
    <p>Resultado 1: <?=soma(10, 20, 5)?></p>
    <p>Resultado 2: <?=soma(23, 84, 1000)?></p>

    <?php
    //chamando e aguardando o retorno
        $resultado3 = soma(500, 480, 700);
    ?>

    <p>Resultado 3: <?=$resultado3?></p>
    
    <?php
        if($resultado3 > 100) { ?>
        <p>Vinicius foi reprovado</p>
    <?php }?>

    <?php
        if( soma(2, 3, 10) >= 10){ ?>
            <p>Kauê reprovado!</p>
    <?php } ?>

            
    <h3>Função com parâmetros opcionais</h3>
    <?php
    //$pessoa é um parâmetro opcional com um valor padrão 
        function saudacao($mensagem, $pessoa = "fulano(a)"){
            return "Olá, $mensagem $pessoa!";
        }
    ?>
    <p><?=saudacao("bom dia", "Melissa")?></p>
    <p><?=saudacao("bom dia", "Tanaka")?></p>
    <p><?=saudacao("boa tarde")?></p>
</body>
</html>