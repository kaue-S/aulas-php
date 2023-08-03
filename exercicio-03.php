<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exercicio 03 - condicionais</h1>

    <?php
    $NovoSalario;
    $salario = 3000;

    if ($salario <= 1500) {
        $NovoSalario = $salario * 1.15;
    } elseif ($salario <= 3000) {
        $NovoSalario = $salario * 1.10;
    } else {
        $NovoSalario = $salario * 1.05;
    }
    ?>

    <section>
        <h2>Antigo salario:</h2>
        <p>RS: <?= number_format($salario, 2, '.', "") ?></p>

        <h2>salario atualizado: </h2>
        <p>RS: <?= number_format($NovoSalario, 2, '.', "") ?></p>
    </section>

</body>

</html>