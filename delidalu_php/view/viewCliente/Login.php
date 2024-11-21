<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Login</title>
    <link rel="stylesheet" href="../css/cadcliente.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../viewProduto/Produto.php">Produtos</a></li>
                <?php

    if (!isset($_SESSION['nome'])){

                ?>
                <li><a href="Login.php">Login</a></li>
                <li><a href="CadCliente.php">Cadastro</a></li>
                <?php
    }else {

    

                ?>
                <li><a href="Perfil.php">Meu Perfil</a></li>
                <li><a href="logout.php">Logout</a></li>
                <?php
    }
                ?>
            </ul>
        </nav>
    </header>
    <div class="form">
        <h4>Login</h4>
        <form method="post" action="../../controler/ControleCliente.php?ACAO=verificarLogin">
            <p> 
                Email:
                <input type="email" id="email" name="email" maxlength="40" placeholder="Email para login" />
            </p>
            <p> 
                Senha:
                <input type="password" id="senha" name="senha" maxlength="40" placeholder="Senha" />
            </p>
            <div>
                <button type="submit" value="Logar">Logar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
        </div>

    </div>
</body>

</html>