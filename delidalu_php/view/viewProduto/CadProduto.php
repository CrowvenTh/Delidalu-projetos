<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/cadcliente.css">
</head>

<body>
    <a href="../index.php" class="login">Voltar</a>
    <a href="Produto.php" class="login">Voltar</a>
    <div class="form">
        
    <h4>Cadastro de Produtos</h4>

        <form method="post" action="../../controler/ControleEstoque.php?ACAO=adicionarProduto">
            <p> 
                Imagem:
                <input type="url" id="imagem" name="imagem" maxlength="500" placeholder="Insira o link da imagem" />
            </p>
            <p> 
                Produto:
                <input type="text" id="nome" name="nome" maxlength="40" placeholder="Insira o nome do produto " />
            </p>
            <p> 
                Quantidade:
                <input type="text" id="quantidade" name="quantidade" maxlength="40" placeholder="Insira a quantidade do produto" />
            </p>
            <p> 
                Preço:
                <input type="text" id="preco" name="preco" maxlength="40" placeholder="Insira o preço do produto" />
            </p>
                <button type="submit" value="Registrar">Cadastrar</button>
                <button type="reset" value="Limpar">Limpar</button>
    </div>
</body>

</html>