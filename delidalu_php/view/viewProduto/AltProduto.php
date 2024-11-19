<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Alteração de Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/cadProduto.css">
</head>

<body>
<header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="Produto.php">Produtos</a></li>
                <?php

    if (!isset($_SESSION['nome'])){

                ?>
                <li><a href="../viewCliente/Login.php">Login</a></li>
                <li><a href="../viewCliente/CadCliente.php">Cadastro</a></li>
                <?php
    }else {

    

                ?>
                <li><a href="../viewCliente/Perfil.php">Meu Perfil</a></li>
                <li><a href="../viewCliente/logout.php">Logout</a></li>
                <?php
    }
                ?>
            </ul>
        </nav>
    </header>
    <div class="form">

        <?php
        require '../../model/ClassEstoque.php';
        require '../../model/DAO/ClassEstDAO.php';

        if (isset($_GET['idproduto'])) {
            $idproduto = $_GET['idproduto'];
            
            $ClassEstDAO = new ClassEstDAO();
            $produto = $ClassEstDAO->buscarProduto($idproduto);
        }
        ?>

        <h4>Alteração de Produtos</h4>

        <form method="POST" action="../../controler/ControleEstoque.php?ACAO=alterarProduto">
            <input type="hidden" name="idproduto" value="<?php echo $produto->getIdproduto(); ?>">

            <label for="imagem">Imagem:</label>
            <input type="text" name="imagem" value="<?php echo $produto->getImagem(); ?>"><br>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $produto->getNome(); ?>"><br>

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" value="<?php echo $produto->getQuantidade(); ?>"><br>

            <label for="preco">Preço:</label>
            <input type="text" name="preco" value="<?php echo $produto->getPreco(); ?>"><br>

            <button type="submit">Salvar Alterações</button>
            <button type="reset" value="Limpar">Limpar</button>
        </form>

    </div>
</body>

</html>