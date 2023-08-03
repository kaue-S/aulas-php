<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
        b{
        background-color: rgba(500,400,0,0.3);
        padding: 10px;
        border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Exercicio 01 php</h1>
    <hr>

    <?php
    $nome = "Kauê Evangelista";
    $curso = "Programação";
    $cargaHoraria = 1000;
    $limiteDeFaltas = $cargaHoraria/4;
    date_default_timezone_set("America/Sao_Paulo");

    $data = date("d/m/Y");
    $hora = date("H:i:s");
    

    echo "Data: " .$data;
    echo "<br><br>";
    echo "Hora: ".$hora;
    ?>

        <ul>
            <li>Data: <?=$data?></li>
            <li>Aluno: <b style="color: red"><?=$nome?> </b></li>
            <li></b>Curso: <b style="color: blue"><?=$curso?></b></li>
            <li>carga horaria de <b style="color: green"><?=$cargaHoraria?> horas</b></li>
            <li>limite de faltas de <b style="color: green"><?=$limiteDeFaltas?> horas.</b></li>
        </ul>
   
</body>
</html>