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
                <li><a href="index.php">Home</a></li>
                <li><a href="controler/produtos.php">Produtos</a></li>
                <li><a href="view/Login.php">Login</a></li>
                <li><a href="view/CadCliente.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h1>Catálogo de Produtos</h1>
            <section class="grid grid-template-columns-4">
                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
                    <p>R$ 10,00</p>
                    <!-- <input class="adicionarButton" type="number" placeholder="Selecione a quantidad"> -->
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
                    <p>R$ 10,00</p>
                    <button class="adicionarButton">Adicionar</button>
                </div>

                <div class="item">
                    <img class="imgProduto" src="design_&_layout/produtos/f40.jpg">
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
            <ul>
                <h3>Autores</h3>
                <li>Thiago</li>
                <li>Yago</li>
                <li>Roney</li>
                <li>Bryan</li>
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
                <li>Github</li>
            </ul>
        </div>
    </footer>

</body>

</html>