<?php
require_once '../model/ClassCliente.php';
require_once '../model/DAO/ClassLoginDAO.php';


$email = @$_POST['email'];
$senha = @$_POST['senha'];
$acao = $_GET['ACAO'];

$setarCredenciais = new ClassCliente();
$setarCredenciais->setEmail($email);
$setarCredenciais->setSenha($senha);

$classLoginDAO = new ClassLoginDAO();
if ($acao=="verificarLogin"){
    $login = $classLoginDAO->login($setarCredenciais);
    if($login >= 1){
        header('Location:../index.html?&MSG= Login realizado com sucesso!');
    } else {
        header('Location:Login.php?&MSG= Não foi possivel realizar o login!');
    }

    }
?>