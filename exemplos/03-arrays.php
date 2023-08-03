<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        ul li:nth-child(odd){
            color: blue;
        }

        ul li:nth-child(even){
            color: red;
        }
    </style>
</head>
<body>
    <H1>Trabalhando com arrays(vetores e matrizes)</H1>

    <h2>Arrays com indice numérico</h2>

    <?php
        // sintaxe com colchetes
        $bandas = ["Savatage", "Dio", "Rush"];

        // sintaxe com função
        $cursos = array("HTML", "Node", "PHP");

        // Sintaxe de atribuição manual
        $buteco[0] = "Bolinho de bacalhau";
        $buteco[1] = "Pastel";
        $buteco[2] = "Esfiha";

        // Constantes de array

        define("UNIDADES_SENAC", ["Penha", "Tatuapé",]);
        const FRUTAS = ["Morango", "Abacaxi"];
    ?>

    <h3>Acessando os dados</h3>

    <ol>
        <li>Banda que mais gosto: <?=$bandas[2]?></li>
        <li>Curso básico de <?=$cursos[0]?></li>
        <li>Quero comer: <?=$buteco[1]?></li>
        <li>Estamos no senac <?=UNIDADES_SENAC[0]?></li>
        <li>Frutas boa para caipirinha: <?=FRUTAS[0]?></li>
    </ol>

    <H2>Array associativo</H2>

    <?php
    $curso = [
        // Chave associativa
        // identificador => valor
        "Titulo" => "Gastronomia",
        "Carga_horaria" => 150,
        "descritivo" => "aprenda a ferver água",
    ];    

    ?>

    <h3>Acessando os dados(arrays associativos)</h3>
    <p>Nome do curso: <?=$curso["Titulo"]?></p>
    <p>Carga horaria: <?=$curso["Carga_horaria"]?> horas</p>
    <p>Descritivo: <?=$curso["descritivo"]?></p>



    <h2>Matriz (array dentro de array)</h2>

    <?php
        $planoDeEstudos = [
            ["JS Avançado", "Node.js","React"],
            ["PHP", "POO", "MySQL", "Phyton"],
            ["Teoria das Cores", "Photoshop", "UX/UI"],
        ];
    ?>

    <ul>
        <li><?=$planoDeEstudos[0][2]?></li>
        <li><?=$planoDeEstudos[1][2]?></li>
        <li><?=$planoDeEstudos[2][1]?></li>
        <li><?=$planoDeEstudos[2][0]?></li>
    </ul>

    <h2>Funções de análise de estruturas de dados(debug/depuração)</h2>


    <h3>print_r()</h3>
    <pre>
        <?=print_r($bandas)?>
    </pre>

    <h3>Var_dump()</h3>
    <pre>
        <?=Var_dump($bandas)?>
    </pre>

    <pre>
        <?=var_dump($planoDeEstudos)?>
    </pre>
</body>
</html>