<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadcliente.css">
</head>

<body>
    <a href="Login.php" class="login">Login</a>
    <div class="form">
        <h4>Formulário de Cadastro de Pedido</h4>
        <form method="post" action="../controler/ControleCliente.php?ACAO=cadastrarPedido">
            <p> 
                ID do cliente:
                <input type="text" name="idcliente" maxlength="40" placeholder="Nome Completo" />
            </p>
            <p> 
                ID do produto:
                <input type="text" id="cpf" name="idestoque" maxlength="40" placeholder="Digite seu CPF" />
            </p>
            <p> 
                Quantidade:
                <input type="text" id="quantidadepedido" name="quantidadepedido" maxlength="40" placeholder="Endereço" />
            </p>
            <p> 
            <div>
                <button type="submit" value="Registrar">Cadastrar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>

    </div>
</body>

</html>