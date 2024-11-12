<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Perfil</title>
    <link rel="stylesheet" href="css/cadcliente.css">
</head>

<body>
    <a href="Login.php" class="login">Login</a>
    <div class="form">
        <h1>Perfil de cliente</h1>
        <br><br>
        <h4>Bem vindo ao seu perfil!</h4>
        <br><br>
        <h5>Seus Dados</h5>
        <br><br>
        <?php
    echo "<p>Seu ID: " . $_SESSION['id_usuario'];"</p>";
    echo "<p>Seu nome: " . $_SESSION['nome'];"</p>";
    echo "<p>Seu endereço: " . $_SESSION['endereco'];"</p>";
    echo "<p>Seu e-mail: " . $_SESSION['email'];"</p>";
    echo "<p>Seu telefone: " . $_SESSION['telefone'];"</p>";

        ?>

        <br><br>
        <h5>Opções</h5>
        <br>
        <a href="AlterarCliente.php">Alterar</a>
        <br>
        <a href="ExcluirCliente.php">Excluir conta</a>
        <br>
        <a href="CadCliente.php">Cadastrar nova conta</a>

    </div>
</body>

</html>