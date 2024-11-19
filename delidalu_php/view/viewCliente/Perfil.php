<?php
session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location: Login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/perfil.css">
</head>

<body>
<header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../viewProduto/Produto.php">Produtos</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="CadCliente.php">Cadastro</a></li>
                <li><a href="Perfil.php">Meu Perfil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <div class="form">
                <h1>Perfil de cliente</h1>
                <br><br>
                <h4 class="dados">Seus Dados:</h5>
                <br>
                <?php
            echo "<p>Seu ID: " . $_SESSION['id_usuario'];"</p>";
            echo "<p>Seu nome: " . $_SESSION['nome'];"</p>";
            echo "<p>Seu CPF: " . $_SESSION['cpf'];"</p>";
            echo "<p>Seu endereço: " . $_SESSION['endereco'];"</p>";
            echo "<p>Seu e-mail: " . $_SESSION['email'];"</p>";
            echo "<p>Seu telefone: " . $_SESSION['telefone'];"</p>";

                ?>

                <br><br>
                <h4 class="opcoes">Opções</h4>
                <br>
                <a href="AlterarCliente.php?idex=<?php echo $_SESSION['id_usuario']; ?>">Alterar Conta</a>
                <br>
                <a href="ExcluirCliente.php?idex=<?php echo $_SESSION['id_usuario']; ?>">Excluir conta</a>
                <br>
                <a href="CadCliente.php">Cadastrar nova conta</a>
                <br>
                <a href="CadPedido.php">Fazer um pedido</a>
                <br>
                <a href="ListarPedidos.php">Meus Pedidos</a>


            </div>
        </section>    
    </main>

    <footer>
        <div class="footer-content">
            <ul class="autores">
                <h3>Autores</h3>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/CrowvenTh">Thiago</a></li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/akirar0n">Yago</a></li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/Yago-LDT">Roney</a></li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/Bryanjvo">Bryan</a></li>
            </ul>
            <ul>
                <h3>Contato</h3>
                <li>(61) 91234-5678</li>
                <li><a style="color: white;" href="mailto:#">corvustech@gmail.com</a></li>
            </ul>
            <ul>
                <h3>Endereço</h3>
                <li>CEP: 123.456-789</li>
                <li>QS alguma coisa</li>
                <li>Rua tal, Samambaia Sul - Brasília/DF</li>
            </ul>
            <ul>
                <h3>Redes Sociais</h3>
                <li>Instagram</li>
                <li>WhatsApp</li>
                <li><a href="https://github.com/CrowvenTh/Delidalu-projetos/tree/main">Github</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>