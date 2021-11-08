<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $nome = $_POST["nome-produto"];
    $preco = $_POST["preco-produto"];
    $desc = $_POST["descricao-produto"];
    $imagem = $_FILES["imagem-produto"];

    $comando = "INSERT INTO produtos(img_produto, nome_produto, preco_produto, descricao_produto) values('$imagem', '$nome', '$preco', '$desc')";
    $query = mysqli_query($conexao, $comando);

    if($query == true){
        header('location: index.php');
    }else{
        echo "Ocorreu um erro ao cadastrar o produto!";
    }

            
?>