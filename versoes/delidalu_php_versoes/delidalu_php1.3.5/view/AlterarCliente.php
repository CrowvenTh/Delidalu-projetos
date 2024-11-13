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
        <h4>Formulário de Alteração de Cliente</h4>
        <form method="post" action="../controler/ControleCliente.php?ACAO=alterarcliente">

            <p> 
                Digite o seu ID atual:
                <input type="text" name="novoid" maxlength="40" placeholder="Digite o seu ID" required/>
            </p>
            
            <p> 
                Novo nome:
                <input type="text" name="nome" maxlength="40" placeholder="Digite o seu nome"/>
            </p>

            <p> 
                Novo CPF:
                <input type="text" name="cpf" maxlength="40" placeholder="Digite o seu CPF"/>
            </p>

            <p> 
                Novo endereço:
                <input type="text" name="endereco" maxlength="40" placeholder="Digite o seu endereco"/>
            </p>

            <p> 
                Novo email:
                <input type="email" name="email" maxlength="40" placeholder="Digite o seu email"/>
            </p>

            <p> 
                Novo telefone:
                <input type="text" name="telefone" maxlength="40" placeholder="Digite o seu telefone"/>
            </p>

            <p> 
                Nova senha:
                <input type="password" name="senha" maxlength="40" placeholder="Digite a sua senha"/>
            </p>

            <div>
                <button type="submit" value="Registrar">Alterar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>

    </div>
</body>

</html>
