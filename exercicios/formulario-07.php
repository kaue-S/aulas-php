<?php
/* Não entendi o motivo deste require... seria para carregar o array dos fabricantes?
Se for por isso, não é uma boa estratégia pois você está carregando o arquivo inteiro.
Poderia simplesmente criar o array aqui mesmo na página do formulário. */
    require "../exercicios/exercicio-07.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>

    </style>
    <title>Exercicio 07</title>
</head>
<body>
    
<h1 class="text-sm-center bg-secondary p-lg-4">Cadastro de produtos</h1>

<div class=" col-12 col-xl-3  d-flex m-auto fs-5">
    <form class=" container text-sm-left bg-info shadow py-3 rounded fs-4" action="exercicio-07.php" method="post">
        <p>
            <label class="form-label" for="nome">Nome do veículo</label><br>
            <input class="form-control shadow" placeholder="Nome do veículo" required type="text" name="nome" id="nome">
        </p>
        <p>
            <label class="form-label" class="mb-1" for="fabricante">Escolha uma marca: </label><br>

            <select class="form-select shadow" name="fabricante" id="fabricante">
                <option></option>
                <?php
                /* Deu certo! */
                    foreach($fabricantes as $fabricante){?>
                        <option value="<?=$fabricante?>"><?=$fabricante?></option>
                <?php            
                    }
                ?>
            </select>
        </p>

        <p>
            <label class="form-label" class="mb-1 " for="preco">Preço:$</label><br>

            <!-- Aqui faltou colocar atributo que permita usar casas decimais (centavos) no preço -->
            <input class="form-control shadow" placeholder="Preço" required type="number" name="preco" id="preco" min="100" max="10000">
        </p>    
        <div class=" justify-content-center">
            <p>Disponibilidade:<br></p>

            <input class="mx-2" type="radio" name="disponivel" id="sim" value="sim">
            <label for="sim">Sim</label>

            <input type="radio" name="disponivel" id="nao" value="nao">
            <label for="nao">Não</label>
        </div>
        <p>
            <label for="mensagem">Mensagem:</label><br>
            <textarea class="w-100 rounded shadow" name="mensagem" id="mensagem" cols="20" rows="5"></textarea>
        </p>
        <!-- <button type="submit">Enviar</button> -->
        <button type="submit" class="btn btn-primary d-flex m-auto">
            Enviar
          </button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</body>
</html>