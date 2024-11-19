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
   
    <title>Excluir</title>
    <link rel="stylesheet" href="../css/excluircliente.css">
</head>

<body>
<header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../viewProduto/Produto.php">Produtos</a></li>
                <?php

    if (!isset($_SESSION['nome'])){

                ?>
                <li><a href="Login.php">Login</a></li>
                <li><a href="CadCliente.php">Cadastro</a></li>
                <?php
    }else {

    

                ?>
                <li><a href="Perfil.php">Meu Perfil</a></li>
                <li><a href="logout.php">Logout</a></li>
                <?php
    }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <div class="form">
                <?php
                    require '../../model/ClassCliente.php';
                    require '../../model/DAO/ClassClienteDAO.php';
                    $id = @$_GET['idex'];
                    $novoCliente = new ClassCliente();
                    $clienteDAO = new ClassClienteDAO();
                    $novoCliente = $clienteDAO->buscarCliente($id);
                ?>
                <h4>Formulário de Exclusão de Cliente</h4>
                <form method="post" action="../../controler/ControleCliente.php?ACAO=excluircliente">

                    <p> 
                        Tem certeza que deseja excluir sua conta?
                        <input type="hidden" name="excluirid" maxlength="40" placeholder="Digite o seu ID" value="<?php echo $novoCliente->getId(); ?>"/>
                    </p>
                    
                    <div>
                        <button type="submit" value="Registrar">Excluir Conta</button>
                    </div>
                </form>
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