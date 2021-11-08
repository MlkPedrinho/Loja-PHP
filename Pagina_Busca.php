<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $busca = $_POST["busca-produto"];

    $comando = "SELECT * FROM produtos WHERE nome_produto LIKE '%".$busca."%'";
    $query = mysqli_query($conexao, $comando);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Artigos Esportivos Online | PM Outlet</title>
    <link rel="stylesheet" href="Pagina_Busca.css">
    <link rel="shortcut icon" href="logo da loja.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
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

    <?php
        if($busca == true){
    ?>
    <h2 class="nome-busca">Resultados de Busca para "<?=$busca?>"</h2>
        <div class="caixa-maior">
        
            
            <?php while($retorno = mysqli_fetch_assoc($query)) : ?>
                

                <center>
                        <div class="caixa-produto">
                            <br><a href="Pagina_Produto.php?id_produto=<?=$retorno["id_produto"]?>"><img class="chut" src="<?=$retorno["img_produto"]?>" alt=""></a><br>
                            <br><a href="Pagina_Produto.php?id_produto=<?=$retorno["id_produto"]?>" class="nome-prod"><?=$retorno["nome_produto"]?></a><br>
                            <p>R$ <?=$retorno["preco_produto"]?>,99</p>
                            <?php if($retorno["preco_produto"] < 150.00) : ?>
                                <p class="frete">FRETE GRÁTIS</p>
                            <?php endif; ?>
                        </div>
                </center>

            <?php endwhile ?> 
        </div>
            
            
    <?php           
        }else{
            echo "<center>Produto não encontrado!</center>";
        }
    ?>
            
        



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