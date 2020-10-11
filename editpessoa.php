<html>

<head>
    <title>Formulário de Editor</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inc/estilos.css" >
    <script src="inc/script.js"></script>
</head>
<body>
    <h1>Editor de Cadastro</h1>
    <a href='listapessoa.php'>Voltar</a>
    <hr/>
    <form method="POST" onsubmit="return validaform()" action="cadpessoa.php">
        <label>Nome do Cliente:</label>
        <input type="text" class="estilomkr" name="nome" id="nome" value="" />
        
        <label>CPF:</label>
        <input type="number"  class="estilomkr" name="cpf" id="cpf" value="" />

        <label>Idade</label>
        <input type="number" class="estilomkr" name="idade" id="idade" value="" />

        <button type="submit">Atualizar</button>

    </form>
<?php

    require('conexao.inc.php');
   // $resultado = mysqli_query($conexao,"UPDATE into pessoa (nome, idade, cpf) values ('{$nome}','{$idade}','{$cpf}')");


    ?>
</body>

</html>