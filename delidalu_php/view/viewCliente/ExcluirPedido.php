<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Excluir</title>
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
        <h4>Formulário de Exclusão de Pedido</h4>
        <form method="post" action="../../controler/ControleCliente.php?ACAO=excluirpedido">

            <p> 
                Digite o ID para exclusão:
                <input type="text" name="excluirid" maxlength="40" placeholder="Digite o ID do pedido" />
            </p>
            
            <div>
                <button type="submit" value="Registrar">Excluir</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>

    </div>
</body>

</html>