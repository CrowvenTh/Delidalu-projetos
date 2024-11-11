<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/x-icon" href="design_&_layout/logotipo/delidalucon.png">
    <title>Carrinho</title>
    <link >
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="Produto.php">Produtos</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="CadCliente.php">Cadastro</a></li>
                <li><a href="Cart.php">Carrinho</a></li>
            </ul>
        </nav>
    </header>
    <?php 
        require '../model/DAO/ClassCartDAO.php';

        $ClassCartDAO = new ClassCartDAO();
        $us = $ClassCartDAO->listcart();

        foreach ($us as $us) {
            echo "<div>";
            echo "<table>";
            echo "<tr>";
            echo "<td><p>" . $us['ID'] . "</p></td>";
            echo "<td><p>" . $us['Cliente'] . "</p></td>";
            echo "<td><p>" . $us['Endereço'] . "</p></td>";
            echo "<td><p>" . $us['Produto'] . "</p></td>";
            echo "<td><p>" . $us['Quantidade'] . "</p></td>";
            echo "<td><p>" . $us['Total'] . "</p></td>";
            echo "<td><p>" . $us['Data_Pedido'] . "</p></td>";
            echo "</tr>"; 
            echo "</table>";
            echo "<div>";
    
        }
    ?>
</body>
</html>