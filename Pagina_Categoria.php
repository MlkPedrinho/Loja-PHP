<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $id_categoria = $_GET["id"];

    $comando = "SELECT * FROM produtos where id_categoria = $id_categoria";
    $query = mysqli_query($conexao, $comando);

    $comando2 = "SELECT * FROM categoria where id = $id_categoria";
    $query2 = mysqli_query($conexao, $comando2);
    $retorno2 = mysqli_fetch_assoc($query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produtos Categoria <?=$retorno2["nome_categoria"]?> | PM Outlet</title>
    <link rel="stylesheet" href="Pagina_Categoria.css">
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

    <div class="produtos">
        <?php while($retorno = mysqli_fetch_assoc($query)) : ?>
            <div class="caixa-produto">
            <br><a href="Pagina_Produto.php?id_produto=<?=$retorno["id_produto"]?>" ><img class="chut" src="<?=$retorno["img_produto"]?>" alt="<?=$retorno["nome_produto"]?>"></a></br>
                <br><a href="Pagina_Produto.php?id_produto=<?=$retorno["id_produto"]?>" id="decoration"><?=$retorno["nome_produto"]?></a></br>
                <p>R$ <?=$retorno["preco_produto"]?>,99</p>
                <?php if($retorno["preco_produto"] < 150.00) : ?>
                    <p class="frete">FRETE GRÁTIS</p>
                <?php endif; ?>
                
            </div>
        <?php endwhile; ?>
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