<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/cadProduto.css">
</head>

<body>
    <a href="../index.php" class="login">Voltar</a>
    <a href="Produto.php" class="login">Voltar</a>
    <div class="form">

        <h4>Cadastro de Produtos</h4>

        <form method="post" action="../../controler/ControleEstoque.php?ACAO=adicionarProduto">

            <label for="imagem">Imagem:</label>
            <input type="url" id="imagem" name="imagem" maxlength="500" placeholder="Insira o link da imagem" />

            <label for="produto">Produto:</label>
            <input type="text" id="nome" name="nome" maxlength="40" placeholder="Insira o nome do produto " />

            <label for="quantidade">Quantidade:</label>
            <input type="text" id="quantidade" name="quantidade" maxlength="40" placeholder="Insira a quantidade do produto" />

            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" maxlength="40" placeholder="Insira o preço do produto" />

            <button type="submit" value="Registrar">Cadastrar</button>
            <button type="reset" value="Limpar">Limpar</button>
    </div>
</body>

</html>