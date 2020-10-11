<?php
    include("conexao.inc.php");

    echo "<script>
        alert('Deseja realmente excluir esse cadastro?');
        document.location = 'listapessoa.php';
        </script>";

    $usu_codigo = (isset($_POST['id']));

    $del = "DELETE FROM pessoa WHERE id = $usu_codigo";
    $sql_query = $mysql->query($del) or die($mysql->error);

    if($sql_query)
        echo "<script> location.href = 'listapessoa.php' </script>";
    else
        echo "<script> alert('Não foi possível deletar o usuario')
        location.href = 'listapessoa.php' </script>";

    echo "<script> 'window.location.href=listapessoa.php'; </script>";
?>