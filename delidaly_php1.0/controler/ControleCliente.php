<?php
require_once '../model/ClassCliente.php';
require_once '../model/DAO/ClassClienteDAO.php';

//Cliente//
$id =@$_POST['idex'];
$nome = @$_POST['nome'];
$cpf = @$_POST['cpf'];
$endereco = @$_POST['endereco'];
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$telefone = @$_POST['telefone'];

//ClientePedido//
$idcliente =@$_POST['idcliente'];
$idestoque =@$_POST['idestoque'];
$quantidadepedido =@$_POST['quantidadepedido'];
$totalpedido =@$_POST['totalpedido'];
$datapedido =@$_POST['datapedido'];


$acao = $_GET['ACAO'];

$processar = new ClassCliente();

//Cliente//
$processar->setId($id);
$processar->setNome($nome);
$processar->setCPF($cpf);
$processar->setEndereco($endereco);
$processar->setEmail($email);
$processar->setSenha($senha);
$processar->setTelefone($telefone);

//ClientePedido//
$processar->setIdcliente($idcliente);
$processar->setIdestoque($idestoque);
$processar->setQuantidadepedido($quantidadepedido);
$processar->setTotalpedido($totalpedido);
$processar->setDatapedido($datapedido);


$ClassClienteDAO = new ClassClienteDAO();

switch($acao) {

    case "verificarLogin":
            $login = $ClassClienteDAO->login($processar);

            if($login >= 1){
                header('Location:../index.php?&MSG= Login realizado com sucesso!');
            } else {
                header('Location:Login.php?&MSG= Não foi possivel realizar o login!');
            }
        break;
//
    case "cadastrarCliente":
        $cliente = $ClassClienteDAO->cadastrar($processar);

	    if($cliente >= 1){
            header('Location:../view/CadCliente.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../view/CadCliente.php?&MSG= Não foi possivel realizar o cadastro!');
        }

        break;
//
    case "cadastrarPedido":
        $pedido = $ClassClienteDAO->cadastrarpedido($processar);

        if($pedido >= 1){
            header('Location:../view/CadPedido.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../view/CadPedido.php?&MSG= Não foi possivel realizar o cadastro!');
        }

        break;
}

