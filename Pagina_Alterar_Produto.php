<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $id = $_GET["id_produto"];

    $comando  = "SELECT * FROM produtos WHERE id_produto = '$id'";
    $query = mysqli_query($conexao, $comando);
    $retorno = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Produtos Cadastrados | PM Outlet</title>
    <link rel="stylesheet" href="Pagina_Alterar_Produto.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo da loja.png">
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <div class="container">
        <div id="navegacao">
            <div class="nome">
                <a href="index.php" class="logo">PM Outlet</a>
            </div>
            <div class="buscar">
                <form method="post" action="Pagina_Busca.php" >
                    <a href="Pagina_Busca.php" class="search"><i class="fas fa-search"></i></a>
                    <p><input type="text" placeholder="Buscar produtos" name="busca-produto" class="formbuscar" style="font-family: FontAwesome;"></p>
                </form>
            </div>
            <div class="carrinho">
                <a href="Pagina_Carrinho.php" class="carrinho2"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div id="entrar">
                <a href="login_cadastro.php" class="entrar">Entrar <i class="fas fa-user-circle"></i></a>
            </div>
        </div>
    </div>

    <div class="formulario-produto">
        <h2 class="form-prod-title">Formulário de Cadastro de Produto</h2>
        <center>
            <form method="POST" action="Pagina_Update_Produto.php?id_produto=<?=$id?>" enctype="multipart/form-data">
                <div class="nome2">
                    <label for="img" class="name-form">Faça o Upload da imagem de um produto:</label><br>
                    <input type="file" name="imagem-produto" class="campo-form" id="img"><br>
                </div>
                
                <div class="nome2">
                    <label for="nome-prod" class="name-form">Nome:</label><br>
                    <input type="text" name="nome-produto" class="campo-form" required="" id="nome-prod" value="<?=$retorno["nome_produto"]?>"><br>
                </div>

                <div class="nome2">
                    <label for="preco-prod" class="name-form">Preço:</label><br>
                    <input type="number" name="preco-produto" id="preco-prod" class="campo-form" value="<?=$retorno["preco_produto"]?>"><br>
                </div>
                
                <div class="nome2">
                    <label for="desc-prod" class="name-form">Descrição:</label><br>
                    <input type="text" name="descricao-produto" id="desc-prod" class="campo-form" value="<?=$retorno["descricao_produto"]?>"><br>
                </div>

                <div class="nome2">
                    <label for="id-cat" class="name-form">ID da Categoria:</label><br>
                    <input type="number" name="id-categoria" id="id-cat" class="campo-form" value="<?=$retorno["id_categoria"]?>"><br>
                </div>

                <input type="submit" class="botao-cadastro" value="Cadastrar">

            </form>
        </center>
    </div>

    <div id="rodapé">
        <div class="part1">
            <div class="rod">
                <a href="SAC.html" class="ajuda">Ajuda e Suporte</a>
            </div>
            <div class="rod">
                <a href="SAC.html" class="ajuda">SAC</a>
            </div>
            <div class="rod">
                <a href="sobrealoja.html" class="ajuda">Institucional</a>
            </div>
        </div>
        <div class="redes">
            <center>
                <a href="" class="icon"><i class="fab fa-facebook"></i></a>
                <a href="" class="icon"><i class="fab fa-youtube"></i></a>
                <a href="" class="icon"><i class="fab fa-instagram"></i></a>
            </center>
        </div>
        <div class="caixa_pagamento">
            <center>
                <a href="" class="pagto"><i class="fab fa-cc-visa"></i></a> 
                <a href="" class="pagto"><i class="fab fa-cc-mastercard"></i></a> 
                <a href="" class="pagto"><i class="fab fa-cc-amex"></i></a>  
                <a href="" class="pagto"><i class="fab fa-cc-paypal"></i></a> 
            </center>

        </div>
    </div>
    
    
</body>
</html>