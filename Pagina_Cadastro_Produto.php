<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $nome = $_POST["nome-produto"];
    $preco = $_POST["preco-produto"];
    $desc = $_POST["descricao-produto"];

    if(isset($_FILES["imagem-produto"])){
        $arquivos = $_FILES["imagem-produto"];

        if($arquivos["error"] == true){
            die("Ocorreu um erro ao fazer o Upload!");
        }

        $pasta = "Imagens/";
        $nome_primario = $arquivos["name"];
        $nome_principal = uniqid();
        $extensao = strtolower(pathinfo($nome_primario, PATHINFO_EXTENSION));

        if($extensao != "jpg" and $entensao != "png"){
            die("Tipo de arquivo não aceito!");
        }

        $funcao = move_uploaded_file($arquivos["tmp_name"], $pasta . $nome_principal . "." . $extensao);

        if($funcao == true){
            require_once 'func_conect.php';

            $conexao = conexao();

            $comando = "INSERT into produtos(img_produto, nome_produto, preco_produto, descricao_produto) values('$pasta$nome_principal.$extensao', '$nome', '$preco', '$desc')";
            $query = mysqli_query($conexao, $comando);

            if($query == true){
                header('location: index.php');
            }else{
                die("Não foi possível cadastrar o Produto!");
            }
            
        }else{
            die("Ocorreu uma falha ao enviar o arquivo! Tente enviar novamente!");
        }
    }

    

            
?>