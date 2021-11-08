<?php
    require_once 'func_conect.php';

    $conexao = conexao();

    $comando = "SELECT * from produtos";
    $query = mysqli_query($conexao, $comando);

    $preco = 0;
    $i = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Artigos Esportivos Online | PM Outlet </title>
    <link rel="stylesheet" href="index.css">
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
                <form method="post" action="Pagina_Busca.php">
                    <a href="Pagina_Busca.php" class="search"><i class="fas fa-search"></i></a>
                    <p><input type="text" placeholder="Buscar produtos" class="formbuscar" name="busca-produto" style="font-family: FontAwesome;"></p>
                </form>
            </div>
            <div class="carrinho">
                <a href="Pagina_Carrinho.php" class="carrinho2"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div id="entrar">
                <a href="login_cadastro.php" class="entrar">Entrar <i class="fas fa-user-circle"></i></a>
            </div>
        </div>
        <div class="maior">
            <?php
                $modalidades = array();
                $modalidades[0] = 'Esportes';
                $modalidades[1] = 'Homens';
                $modalidades[2] = 'Mulheres';
                $modalidades[3] = 'Crianças';
                $modalidades[4] = 'Futebol';
                $modalidades[5] = 'Calçados';
                $modalidades[6] = 'Roupas';
                $modalidades[7] = 'Acessórios';
            ?>
            <?php for ($i=0; $i < count($modalidades); $i++) :?>
                <div><?=$modalidades[$i]?></div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="produtos">

        <?php while ($retorno = mysqli_fetch_assoc($query)): ?>
            <div class="ft1">
                <br><a href="Pagina_Produto.php?id_produto=<?=$retorno["id_produto"]?>" ><img class="chut" src="<?=$retorno["img_produto"]?>" alt="<?=$retorno["nome_produto"]?>"></a></br>
                <br><a href="Pagina_Produto.php?id_produto=<?=$retorno["id_produto"]?>" id="decoration"><?=$retorno["nome_produto"]?></a></br>
                <p>R$ <?=$retorno["preco_produto"]?>,99</p>
                <?php if($retorno["preco_produto"] < 150.00) : ?>
                    <p class="frete">FRETE GRÁTIS</p>
                <?php endif; ?>
                <?php
                    if($retorno["preco_produto"] < 100.00){
                        $preco = $retorno["preco_produto"] / $i;
                    }
                    else if($retorno["preco_produto"] < 300.00){
                        $i = $i + 2;
                        $preco = $retorno["preco_produto"] / $i;
                    }
                    else if($retorno["preco_produto"] >= 300.00){
                        $i = $i +3;
                        $preco = $retorno["preco_produto"] / $i;
                    }
                ?>
                
                <p><?=$i?> x de <?=$preco?> </p>
            </div>
        <?php endwhile ?>
        
    </div>

    <div class="link-form-prod">
        <h2 class="title-form">Deseja Cadastrar Um Novo Produto?</h2>
        <a href="Pagina_Form_Produto.php"><input type="submit" class="botao-form" value="Ir Para Página de Cadastro De Produto"></a>
        <p class="ou">ou</p>
        <h2 class="title-form">Deseja Editar/Excluir Um Produto?</h2>
        <a href="Pagina_Edit_Produto.php"><input type="submit" class="botao-form" value="Ir Para Página De Edição De Produto"></a>
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