<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Entre ou Cadastre-se | PM Outlet</title>
    <link rel="stylesheet" href="login_cadastro.css">
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
                <a href="login_cadastro.html" class="entrar">Entrar <i class="fas fa-user-circle"></i></a>
            </div>
        </div>
    </div>
    <div class="pai">
        <div class="cadastrado">
            <h3 class="h3">Já é cliente?</h3>
            <br><form method="" action="">
                <p><input type="email" placeholder="E-mail" class="form"></p>
            </form></br>
            <br><form  method="" action="">
                <p><input type="password" placeholder="Senha" class="form"></p>
            </form></br>
            <br><a href="" class="senha">Esqueci minha senha</a></br> 
            <div class="entrar_facebook">
                <a href="" class="face"><i id="icon-face" class="fab fa-facebook"></i>Entrar com o Facebook</a>
            </div>
            <br><button type="submit" class="botao">Acessar Conta</button></br>
        </div>
        <div class="pai2">
            <div class="ñcadastrado">
                <h3 class="h3">Crie uma conta</h3>
                <br><form method="" action="">
                    <p><input type="email" placeholder="E-mail" class="form"></p>
                </form></br>
                <br><form  method="" action="">
                    <p><input type="password" placeholder="Senha" class="form"></p>
                </form></br>
                <br><form  method="" action="">
                    <p><input type="number" placeholder="CPF" class="form"></p>
                </form></br>
                <br><form  method="" action="">
                    <p><input type="text" placeholder="Nome" class="form"></p>
                </form></br>
                <p id="p">Informe sua data de nascimento:</p>
                <br><form  method="" action="">
                    <p><input type="date" placeholder="Data de nascimento" class="form"></p>
                </form></br>
                <br><form  method="" action="">
                    <p><input type="number" placeholder="Telefone" class="form"></p>
                </form></br>
                <div>
                    
                </div>
                <br><button type="submit" class="botao">Criar Conta</button></br>
            </div>
        </div>
    </div>
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