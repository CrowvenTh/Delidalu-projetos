<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Alterar</title>
    <link rel="stylesheet" href="css/cadcliente.css">
</head>

<body>
    <a href="Login.php" class="login">Login</a>
    <div class="form">
        <h4>Formulário de Alteração de Pedido</h4>
        <form method="post" action="../controler/ControleCliente.php?ACAO=alterarpedido">

            <p> 
                Digite o ID do seu pedido:
                <input type="text" name="novoid" maxlength="40" placeholder="Digite o ID para alterar" required/>
            </p>
            
            <p> 
                Digite o seu ID:
                <input type="text" name="idcliente" maxlength="40" placeholder="Digite o seu ID"/>
            </p>

            <p> 
                ID do produto:
                <input type="text" name="idestoque" maxlength="40" placeholder="Digite o ID do produto"/>
            </p>

            <p> 
                Nova quantidade:
                <input type="text" name="quantidadepedido" maxlength="40" placeholder="Digite a quantidade do produto"/>
            </p>

            <div>
                <button type="submit" value="Registrar">Alterar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
    </div>
</body>

</html>