<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e processamento juntos</title>
    <style>
        form {
            background-color: aqua;
            width: 240px;
            margin: auto;
            padding: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 23px 19px 30px -6px rgba(0,0,0,0.75);
            -moz-box-shadow: 23px 19px 30px -6px rgba(0,0,0,0.75);
            box-shadow: 23px 19px 30px -6px rgba(0,0,0,0.75);
        }

        form p {
            text-align: left    ;
        }

        input {
            text-align: left;
        }

        input, textarea {
            border: none;
        }

        button {
            background-color: rgb(34, 48, 44);
            color: white;
            display: flex;
            margin: auto;
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
        }

        button:hover{
            transform: scale(1.3);
            transition: 0.5s;

        }
    </style>
</head>
<body>
    <h1>formulário e processamento juntos</h1>  
    <hr>

    <?php
    //se o botão enviar for acionado / significa que o formulário foi enviado
        if( isset($_POST["enviar"]) ){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
    ?>

        <h2>Dados processados</h2>
        <p>Nome: <?=$nome?></p>
        <p>E-mail: <?=$email?></p>
    <?php
    } else {
    ?>

    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input placeholder="Digite o nome" required type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input placeholder="Digite o E-mail" required type="email" name="email" id="email">
        </p>
        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
    <?php
    }
    ?>
</body>
</html>