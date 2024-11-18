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
   
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/alterarcliente.css">
</head>

<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="view/viewProduto/Produto.php">Produtos</a></li>
                <?php

    if (!isset($_SESSION['nome'])){

                ?>
                <li><a href="view/viewCliente/Login.php">Login</a></li>
                <li><a href="view/viewCliente/CadCliente.php">Cadastro</a></li>
                <?php
    }else {

    

                ?>
                <li><a href="view/viewCliente/Perfil.php">Meu Perfil</a></li>
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
                        <h4>Formulário de Alteração de Cliente</h4>
                            <form method="post" action="../../controler/ControleCliente.php?ACAO=alterarcliente">

                                <p> 
                                    Digite o seu ID atual:
                                    <input type="text" name="novoid" maxlength="40" placeholder="Digite o seu ID" value="<?php echo $novoCliente->getId(); ?>" required/>
                                </p>
                                
                                <p> 
                                    Novo nome:
                                    <input type="text" name="nome" maxlength="40" placeholder="Digite o seu nome" value="<?php echo $novoCliente->getNome(); ?>"/>
                                </p>

                                <p> 
                                    Novo CPF:
                                    <input type="text" name="cpf" maxlength="40" placeholder="Digite o seu CPF" value="<?php echo $novoCliente->getCpf(); ?>"/>
                                </p>

                                <p> 
                                    Novo endereço:
                                    <input type="text" name="endereco" maxlength="40" placeholder="Digite o seu endereco" value="<?php echo $novoCliente->getEndereco(); ?>"/>
                                </p>

                                <p> 
                                    Novo email:
                                    <input type="email" name="email" maxlength="40" placeholder="Digite o seu email" value="<?php echo $novoCliente->getEmail(); ?>"/>
                                </p>

                                <p> 
                                    Novo telefone:
                                    <input type="text" name="telefone" maxlength="40" placeholder="Digite o seu telefone" value="<?php echo $novoCliente->getTelefone(); ?>"/>
                                </p>

                                <p> 
                                    Nova senha:
                                    <input type="password" name="senha" maxlength="40" placeholder="Digite a sua senha" value="<?php echo $novoCliente->getSenha(); ?>"/>
                                </p>

                                <div>
                                    <button type="submit" value="Registrar">Alterar</button>
                                    <button type="reset" value="Limpar">Limpar</button>
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
