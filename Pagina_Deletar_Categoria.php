<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $id = $_GET["id"];

    $comando = "DELETE FROM categoria where id = $id";
    $query = mysqli_query($conexao, $comando);

    if($query == true){
        header('location: index.php');
    }else{
        die("NÃO FOI POSSÍVEL DELETAR A CATEGORIA!");
    }

?>