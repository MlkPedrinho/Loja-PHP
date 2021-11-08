<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $id = $_GET["id_produto"];

    $query = "SELECT * FROM produtos WHERE id_produto='$id'";
    $resultado= mysqli_query($conexao, $query);
    $retorno = mysqli_fetch_assoc ($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?=$retorno["nome_produto"]?> | PM Outlet</title>
    <link rel="stylesheet" href="Pagina_Produto.css">
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
    <div class="maior">
        <div class="zoom">
            <img class="imagem" src="<?=$retorno['img_produto']?>">
            <img class="img-menor" src="<?=$retorno['img_produto']?>">
        </div>
        <div class="preço">
            <h1 class="info_prod"><?=$retorno["nome_produto"]?></h1>
            <h1 class="info_prod">R$ <?=$retorno["preco_produto"]?>,99</h1><br>
            <h2 class="info_prod">Em até 5x de 37,99 sem juros </h2>
            <form id="formulario" action="" method="">
            <label class="info_prod">Escolha o tamanho</label>
            <select>
                <?php
                        for($i=37; $i<=44; $i++){
                            echo "<option>";
                            echo $i;
                            echo "</option>";
                        }
                ?>
            </select>
            </form>
            <br>
        <div id="botao">
            <button class="b1"><a href="" class="comprar">Comprar</a></button><br>
            <button class="b1"><a href="Pagina_Carrinho.php" class="comprar">Adicionar ao carrinho <i class="fas fa-shopping-cart"></i></a></button>
        </div>
            <hr>
            <p class="info_prod">Calcular Frete:</p>
            <form action="Pagina_Produto.php" method="POST">
                <input type="number" placeholder="Insira seu CEP" class="cep" name="cep">
                <button type="submit">Calcular</button>
            </form>
        </div>
    </div>

    <hr class="linha-desc">

    <div class="descricao">
        <h2 class="titulo-descricao"><strong>Descrição:</strong></h2>
        <h2 class="text-descricao"><?=$retorno["descricao_produto"]?></h2>
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
