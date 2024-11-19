<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Listagem</title>
    <link rel="stylesheet" href="../css/listarpedido.css">
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
    
    <div class="form">
        <h4>Formulário de Listagem de Pedido</h4>

        <?php
        session_start();

        if (!isset($_SESSION['nome'])) {
          echo "Você precisa estar logado para visualizar seus pedidos.";
          exit();
      }

        $nomecliente = $_SESSION['nome'];

       

        if ($nomecliente) {
    require '../../model/DAO/ClassClienteDAO.php';

    $ClassClienteDAO = new ClassClienteDAO();
    $us = $ClassClienteDAO->listarpedido($nomecliente);

    if(empty($us)){
      echo "<div style='color: red; text-align: center; margin-top: 20px;'>
      Nenhum pedido encontrado para o cliente <strong>{$nomecliente}</strong>.
    </div>";
      return;
    }else

  echo "<table class='exemplo'>";
  echo "<tr>";
  echo "<td><p> ID </p></td>";
  echo "<td><p> Cliente </p></td>";
  echo "<td><p> Endereço </p></td>";
  echo "<td><p> Produto </p></td>";
  echo "<td><p> Quantidade </p></td>";
  echo "<td><p> Total </p></td>";
  echo "<td><p> Data do Pedido </p></td>";
  echo "</tr>";
  echo "</table>";

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
  } else {
    echo "Você precisa estar logado para visualizar seus pedidos.";
}
?>

    </div>
</body>

</html>

