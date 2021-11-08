<?php
    function conexao(){
        $conexao = mysqli_connect("localhost", "root", "", "loja_PM_Outlet");

        if(!$conexao){
            die("Conexão não deu certo!" . mysqli_connect_error());
        }
        return $conexao;
    }
?>