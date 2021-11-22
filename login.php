<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comando = "SELECT * FROM usuario WHERE email_usuario = '$email' && senha_usuario = '$senha'";
    $query = mysqli_query($conexao, $comando);

    $retorno = mysqli_fetch_assoc($query);

    if($retorno == NULL){
        echo "Ocorreu um erro";
    }else{
        echo "Você está cadastrado";
    }
?>