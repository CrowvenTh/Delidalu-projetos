<?php
session_start();
// include("CadProduto.php");

require '../../model/ClassEstoque.php';
require '../../model/DAO/ClassEstDAO.php';

$ClassEstDAO = new ClassEstDAO();
$us = $ClassEstDAO->listarProduto();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delidalu</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" type="image/x-icon" href="../design_&_layout/logotipo/delidalucon.png">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../viewProduto/Produto.php">Produtos</a></li>
                <li><a href="../viewCliente/login.php">Login</a></li>
                <li><a href="../viewCliente/CadCliente.php">Cadastro</a></li>
                <li><a href="../viewCliente/Perfil.php">Meu Perfil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h1>Catálogo de Produtos</h1>
            <section class="grid grid-template-columns-4">
                <div class="item">
                    <!-- <img class="imgProduto" src="https://img.freepik.com/vetores-premium/adicionar-icone-sinal-brilhante-graficos-vetoriais_292645-550.jpg?w=740"> -->
                    <img class="imgProduto" src="../design_&_layout/logotipo/adicionar-icon.png">
                    <button class="adicionarButton"><a href="../viewProduto/CadProduto.php">Adicionar</a></button>
                    
                </div>
                <?php
                foreach ($us as $us) {
                    echo "<div class='item'>";
                    echo "<img class='imgProduto' src=" .$us['imagem']." alt='img'>";
                    echo "<h3>" . $us['nome'] . "</h3>"; 
                    echo "<p>Preço: R$" . $us['preco'] . "</p>";
                    // echo "<button class='adicionarButton'><a href='../viewProduto/CadProduto.php?id=" . $us['id'] . "'>Adicionar</a></button>";
                    echo "<button class='alterarButton'><a href='../viewProduto/CadProduto.php?id=" . $us['id'] . "'>Alterar</a></button>";
                    echo "<button class='excluirButton'><a href='../viewProduto/CadProduto.php?id=" . $us['id'] . "'>Excluir</a></button>";
                    echo "</div>";
                }
                ?>
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
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/telefone.png"> (61) 91234-5678</li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/email.png"> <a style="color: white;" href="mailto:#">delidalu@gmail.com</a></li>
            </ul>
            <ul>
                <h3>Endereço</h3>
                <li>CEP: 123.456-789</li>
                <li>QS alguma coisa</li>
                <li>Rua tal, Samambaia Sul - Brasília/DF</li>
            </ul>
            <ul>
                <h3>Redes Sociais</h3>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/ig icon.png"> <a href="#">Instagram</a></li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/whatsapp.png"> <a href="#">WhatsApp</a></li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/link icon.png"> <a href="https://github.com/CrowvenTh/Delidalu-projetos/tree/main">Github</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>