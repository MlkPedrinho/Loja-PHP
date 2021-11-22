<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $nome_usuario = $_POST["nome"];
    $email_usuario = $_POST["email"];
    $senha_usuario = $_POST["senha"];
    $cpf_usuario = $_POST["cpf"];
    $data_nascimento_usuario = $_POST["data_nascimento"];
    $telefone_usuario = $_POST["numero_telefone"];

    $comando = "INSERT INTO usuario(nome_usuario, email_usuario, senha_usuario, cpf_usuario, data_nascimento_usuario, telefone_usuario) values('$nome_usuario', '$email_usuario', '$senha_usuario', '$cpf_usuario', '$data_nascimento_usuario', '$telefone_usuario')";
    $query = mysqli_query($conexao, $comando);
    echo mysqli_error($conexao) . "\n";

    if($query == true){
        header('location: index.php');
    }else{
        echo "Ocorreu algum erro ao cadastrar-se!";
    }


?>