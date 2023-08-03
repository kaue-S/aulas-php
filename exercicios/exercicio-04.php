<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            text-align: center;
            transition: 2s;
            transform: scale(1);
            margin: auto;
        }

        table:hover {
            transform: scale(2);                        
                                  
        }

        table th {
            background-color: black;
            color: white;

        }

        table tr:nth-child(even) {
            background-color: blue;
            color: white;
        }

        table tr:nth-child(odd) {
            background-color: grey;
            color: white;
        }

        h1 { 
            text-align: center;
            transform: scale(1);
            transition: 2s;
        }
        h1:hover {
            transform: scale(2);
        }
    </style>

</head>

<body>
    <article>
        <h1>exercicio 04</h1>

        <?php
        $linguagens = [
            "HTML" => "Estruturaçao",
            "CSS" => "Estilos",
            "JS" => "Comportamento",
            "PHP" => "Back-End",
            "SQL" => "Manipulação de dados",
            "Java" => "Softwares",
        ];
        ?>

        <table border="1">
            <tr>
                <th>Id</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>

            <?php
            $i = 0;
            foreach ($linguagens as $linguagem => $descricao) {
                $i++;
            ?>

                <tr>
                    <td><?= $i ?></td>
                    <td><?= $linguagem ?></td>
                    <td><?= $descricao ?></td>
                </tr>

            <?php
            };
            ?>
    </article>
</body>

</html>