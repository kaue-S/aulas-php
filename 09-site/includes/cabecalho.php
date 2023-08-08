

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <?php
    $titulos = [
        'index.php' => 'Site de Exemplo - PHP', 
        'duvidas.php' => 'Tire suas dúvidas',
        'cursos.php' => 'Nossos cursos',
        'contato.php' => 'Entre em contato'
    ];
    ?>

    <?php
    $paginaAtual = basename($_SERVER['PHP_SELF']);
    
    foreach ($titulos as $pagina => $titulo) {
        if ($pagina === $paginaAtual) {
            echo "<title>$titulo</title>";
        }
    }
    ?>

</head>
<body>
    <header>
        <h1></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    
    <main>
 