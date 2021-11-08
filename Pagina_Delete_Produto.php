<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $id = $_GET["id_produto"];

    $comando = "DELETE FROM produtos WHERE id_produto = '$id'";
    $query = mysqli_query($conexao, $comando);

    if($query == true){
        header('location: index.php');
    }else{
        echo "Ocorreu um erro ao excluir o produto!";
    }
?>