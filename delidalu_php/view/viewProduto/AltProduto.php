<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Alteração de Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/cadcliente.css">
</head>

<body>
    <a href="Produto.php" class="login">Voltar</a>
    <div class="form">

        <?php
        require '../../model/ClassEstoque.php';
        require '../../model/DAO/ClassEstDAO.php';

        if (isset($_GET['idproduto'])) {
            $idproduto = $_GET['idproduto'];
            $imagem = $_POST['imagem'];
            $nome = $_POST['nome'];
            $quantidade = $_POST['quantidade'];
            $preco = $_POST['preco'];

            $ClassEstDAO = new ClassEstDAO();
            $produto = $ClassEstDAO->buscarProduto($idproduto);
        }
        ?>

        <h4>Alteração de Produtos</h4>

        <form method="post" action="../../controler/ControleEstoque.php?ACAO=alterarProduto&idproduto=<?php echo $idproduto; ?>">
            <p>
                Imagem:
                <input type="url" id="imagem" name="imagem" maxlength="500" placeholder="Insira o link da imagem" value="<?php echo $imagem; ?>" />
            </p>
            <p>
                Produto:
                <input type="text" id="nome" name="nome" maxlength="40" placeholder="Insira o nome do produto" value="<?php echo $nome; ?>" />
            </p>
            <p>
                Quantidade:
                <input type="text" id="quantidade" name="quantidade" maxlength="40" placeholder="Insira a quantidade do produto" value="<?php echo $quantidade; ?>" />
            </p>
            <p>
                Preço:
                <input type="text" id="preco" name="preco" maxlength="40" placeholder="Insira o preço do produto" value="<?php echo $preco; ?>" />
            </p>
            <button type="submit" value="Registrar">Confirmar alterações</button>
            <button type="reset" value="Limpar">Limpar</button>
            <!-- </form> -->

    </div>
</body>

</html>