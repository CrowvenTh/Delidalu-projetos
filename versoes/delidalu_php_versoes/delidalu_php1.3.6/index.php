<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delidalu</title>
    <link rel="stylesheet" href="view/css/index.css">
    <link rel="icon" type="image/x-icon" href="view/design_&_layout/logotipo/delidalucon.png">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="view/Produto.php">Produtos</a></li>
                <li><a href="view/Login.php">Login</a></li>
                <li><a href="view/CadCliente.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <section class="aboutus">
            <br>
            <img style="width: 150px; border-radius: 250px;" src="view/design_&_layout/logotipo/delilogo.jpg"
                alt="Logo Corvus.tech">
            <br>
            <h1>Sobre nós</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>
            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
            </p>
            <p>
                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra,
                est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod
                gravida.
            </p>
            <p>
                Aliquam erat volutpat. Mauris ac leo euismod, vestibulum elit id, ultrices orci. Suspendisse potenti.
                Sed varius quam ac venenatis. Phasellus aliquet, risus at convallis feugiat, leo orci volutpat dui,
                vitae posuere enim lorem id eros.
            </p>
            <p>
                Morbi pretium justo ut ultricies convallis. Praesent sollicitudin metus et massa tincidunt, ut lacinia
                lorem ultricies. Vivamus dictum, eros vel vulputate eleifend, nisl odio gravida libero, et interdum nisi
                enim a augue. Etiam euismod nibh eget velit cursus, sed elementum justo facilisis.
            </p>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <ul class="autores">
                <h3>Autores</h3>
                <li> <img class="autoresImg" src="view/design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/CrowvenTh">Thiago</a></li>
                <li> <img class="autoresImg" src="view/design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/akirar0n">Yago</a></li>
                <li> <img class="autoresImg" src="view/design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/Yago-LDT">Roney</a></li>
                <li> <img class="autoresImg" src="view/design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/Bryanjvo">Bryan</a></li>
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