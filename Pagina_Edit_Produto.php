<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $comando = "SELECT * FROM produtos";
    $query = mysqli_query($conexao, $comando);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar ou Exluir Produtos Cadastrados | PM Outlet</title>
    <link rel="stylesheet" href="Pagina_Edit_Produto.css">
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

    <div class="prod">
        <h2 class="title">Produtos Cadastrados</h2>
        <table>
            <tr>
                <td class="columns-table">Imagem</td>
                <td class="columns-table">Nome</td>
                <td class="columns-table">Preço</td>
                <td class="columns-table">Editar</td>
                <td class="columns-table">Excluir</td>
            </tr>
        
        <?php while($retorno = mysqli_fetch_assoc($query)): ?>
            <div class="info-prod">
                <tr>
                    <td><img src="<?=$retorno["img_produto"]?>" alt="" class="img-produto"></td>
                    <td><h2 class="name-prod"><?=$retorno["nome_produto"]?></h2></td>
                    <td><h2 class="name-prod">R$ <?=$retorno["preco_produto"]?>,99</h2></td>
                    <td><a href="Pagina_Alterar_Produto.php?id_produto=<?=$retorno["id_produto"]?>" class="icons-link"><i class="fas fa-edit"></i></a></td>
                    <td><a href="Pagina_Delete_Produto.php?id_produto=<?=$retorno["id_produto"]?>" class="icons-link"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            </div>

            

        <?php endwhile; ?>
        </table>
        
        
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