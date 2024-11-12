<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="css/cadcliente.css">
</head>

<body>
    <a href="../index.php" class="login">Voltar</a>
    <div class="form">
        <h4>Cadastro de Produtos</h4>
        <form method="post" action="../controler/ControleEstoque.php?ACAO=addProduto">
            <p> 
                Produto:
                <input type="text" id="nome" name="nome" maxlength="40" placeholder="" />
            </p>
            <p> 
                Tipo:
                <input type="text" id="tipo" name="tipo" maxlength="40" placeholder="" />
            </p>
            <p> 
                Quantidade:
                <input type="text" id="quantidade" name="quantidade" maxlength="40" placeholder="" />
            </p>
            <p> 
                Preço:
                <input type="text" id="preco" name="preco" maxlength="40" placeholder="" />
            </p>
                <button type="submit" value="Registrar">Cadastrar</button>
                <button type="reset" value="Limpar">Limpar</button>
    </div>
</body>

</html>