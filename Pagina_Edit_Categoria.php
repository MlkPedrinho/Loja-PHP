<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $id = $_GET["id"];

    $nome_categoria = $_POST["nome-categoria"];

    $comando = "UPDATE categoria SET nome_categoria = '$nome_categoria' where id = '$id'";
    $query = mysqli_query($conexao, $comando);

    if($query == true){
        header('location: index.php');
    }else{
        die("NÃO FOI POSSÍVEL ALTERAR A CATEGORIA!");
    }



?>