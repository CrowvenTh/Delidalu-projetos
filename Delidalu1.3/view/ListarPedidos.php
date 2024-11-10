<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Listagem</title>
    <link rel="stylesheet" href="css/cadcliente.css">
</head>

<body>
    <a href="" class="login">Login</a>
    <div class="form">
        <h4>Formulário de Listagem de Pedido</h4>

        <?php
    require '../model/DAO/ClassClienteDAO.php';

    $ClassClienteDAO = new ClassClienteDAO();
    $us = $ClassClienteDAO->listarpedido();

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


            

    </div>
</body>

</html>

