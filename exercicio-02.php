<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            list-style: none;
            font-family: 'arial';
        }
        .container{
            display: flex;
            gap: 50px;
            justify-content: center;    
        }

        section{
            border-radius: 12px;
            box-shadow: 7px 6px 30px -10px;
            padding: 20px;
            background-image: linear-gradient(
            310deg,
            hsl(240deg 93% 55%) 0%,
            hsl(290deg 100% 40%) 11%,
            hsl(316deg 100% 43%) 22%,
            hsl(328deg 100% 48%) 33%,
            hsl(348deg 93% 63%) 44%,
            hsl(7deg 87% 67%) 56%,
            hsl(20deg 75% 67%) 67%,
            hsl(30deg 60% 70%) 78%,
            hsl(40deg 41% 76%) 89%,
            hsl(55deg 16% 84%) 100%
            );

        }

        section:hover{
            transform: scale(1.3);
            transition: 0.5s;
            rotate: 360deg;
        }

        section:first-child{
            background-image: linear-gradient(
            310deg,
            hsl(240deg 26% 89%) 0%,
            hsl(269deg 65% 91%) 11%,
            hsl(305deg 94% 91%) 22%,
            hsl(315deg 100% 89%) 33%,
            hsl(333deg 100% 88%) 44%,
            hsl(359deg 100% 87%) 56%,
            hsl(23deg 100% 79%) 67%,
            hsl(37deg 100% 71%) 78%,
            hsl(48deg 100% 62%) 89%,
            hsl(55deg 100% 50%) 100%
            );
        }
       
    </style>
</head>
<body>
   <h1>Exercicio 03</h1> 

   <?php
    $primeiraPessoa = [
        "Kaue", 
        "Kaue506@gmail.com", 
        12345678, 
        28, 
        "Masculino", 
        "São Paulo",
    ];
    
    $segundaPessoa = [
        "nicolas", 
        "nicolas@hotmail.com", 
        87654321, 
        18, 
        "Masculino", 
        "São Paulo",
    ];
   ?>

    <article class="container">
        <section>
            <h2>Dados da segunda pessoa</h2>

            <ul>
                <li><b>Nome:</b>  <?=$primeiraPessoa[0]?></li>
                <li><b>Email:</b> <?=$primeiraPessoa[1]?></li>
                <li><b>Idade:</b> <?=$primeiraPessoa[3]?></li>
                <li><b>Sexo:</b>  <?=$primeiraPessoa[4]?></li>
            </ul>
        </section>

        <section>
            <h2>Dados da segunda pessoa</h2>

            <ul>
                <li><b>Nome:</b> <?=$segundaPessoa[0]?></li>
                <li><b>Email:</b> <?=$segundaPessoa[1]?></li>
                <li><b>Idade:</b> <?=$segundaPessoa[3]?></li>
                <li><b>Sexo:</b> <?=$segundaPessoa[4]?></li>
            </ul>
        </section>
    </article>

</body>
</html>