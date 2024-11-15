<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Excluir</title>
    <link rel="stylesheet" href="../css/cadcliente.css">
</head>

<body>
    <a href="../viewCliente/Login.php" class="login">Login</a>
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