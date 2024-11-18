<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Alteração de Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/cadProduto.css">
</head>

<body>
    <a href="Produto.php" class="login">Voltar</a>
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

        <form action="ControleEstoque.php?ACAO=alterarProduto" method="POST">
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