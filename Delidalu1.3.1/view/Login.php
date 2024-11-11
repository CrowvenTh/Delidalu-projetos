<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<a href="CadCliente.php" class="cadastro">Cadastrar-se</a>
    <div class="form">
        <h4>Formulário de Login</h4>
        <form method="post" action="../controler/ControleCliente.php?ACAO=verificarLogin">
            <p> 
                Email:
                <input type="email" id="email" name="email" maxlength="40" placeholder="Email para login" />
            </p>
            <p> 
                Senha:
                <input type="password" id="senha" name="senha" maxlength="40" placeholder="Senha" />
            </p>
            <div>
                <button type="submit" value="Logar">Logar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
        </div>

    </div>
</body>

</html>