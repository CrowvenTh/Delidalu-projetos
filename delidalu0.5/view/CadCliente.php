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
        <h4>Formulário de Cadastro de Cliente</h4>
        <form method="post" action="../controler/ControleCadastro.php?ACAO=cadastrarCliente">
            <p> 
                Nome:
                <input type="text" name="nome" maxlength="40" placeholder="Nome Completo" />
            </p>
            <p> 
                CPF:
                <input type="text" id="cpf" name="cpf" maxlength="40" placeholder="Digite seu CPF" />
            </p>
            <p> 
                Endereço:
                <input type="text" id="endereco" name="endereco" maxlength="40" placeholder="Endereço" />
            </p>
            <p> 
                E-mail:
                <input type="email" id="email" name="email" maxlength="40" placeholder="E-mail para login" />
            </p>
            <p> 
                Telefone:
                <input type="text" id="telefone" name="telefone" maxlength="40" placeholder="Telefone" />
            </p>
            <p> 
                Senha:
                <input type="password" id="senha" name="senha" maxlength="40" placeholder="Senha" />
            </p>
            <div>
                <button type="submit" value="Registrar">Cadastrar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>

    </div>
</body>

</html>
