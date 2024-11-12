<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delidalu</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/x-icon" href="design_&_layout/logotipo/delidalucon.png">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="Produto.php">Produtos</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="CadCliente.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h1>Catálogo de Produtos</h1>
            <section class="grid grid-template-columns-4">
                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/brigadeiro.jpeg">
                    <p>Brigadeiro</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <!-- <input class="adicionarButton" type="number" placeholder="Selecione a quantidad"> -->
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/beijinho.jpg">
                    <p>Beijnho</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/ninho.jpg">
                    <p>Ninho</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/boloChocolate.jpg">
                    <p>Bolo de chocolate</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/boloPersonalizado.jpg">
                    <p>Bolo personalizado</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/casadinho.jpg">
                    <p>Casadinho</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/boloFatia.jpg">
                    <p>Fatia de bolo</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/kiFesta.jpg">
                    <p>Kit Festa</p>
                    <p>Descrição</p>
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>
                <!-- <div class="item">2</div>
                <div class="item">3</div>
                <div class="item">4</div>
                <div class="item">5</div>
                <div class="item">6</div>
                <div class="item">7</div>
                <div class="item">8</div> -->
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <ul class="autores">
                <h3>Autores</h3>
                <li> <img class="autoresImg" src="design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/CrowvenTh">Thiago</a></li>
                <li> <img class="autoresImg" src="design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/akirar0n">Yago</a></li>
                <li> <img class="autoresImg" src="design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/Yago-LDT">Roney</a></li>
                <li> <img class="autoresImg" src="design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/Bryanjvo">Bryan</a></li>
            </ul>
            <ul>
                <h3>Contato</h3>
                <li>(61) 91234-5678</li>
                <li><a style="color: white;" href="mailto:#">delidalu@gmail.com</a></li>
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