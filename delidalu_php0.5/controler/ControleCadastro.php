<?php
require_once '../model/ClassCliente.php';
require_once '../model/DAO/ClassCadastroDAO.php';

$id =@$_POST['idex'];
$nome = @$_POST['nome'];
$cpf = @$_POST['cpf'];
$endereco = @$_POST['endereco'];
$email = @$_POST['email'];
$telefone = @$_POST['telefone'];
$senha = @$_POST['senha'];
$acao = $_GET['ACAO'];


$novoCliente = new ClassCliente();
$novoCliente->setIdCliente($id);
$novoCliente->setNome($nome);
$novoCliente->setCpf($cpf);
$novoCliente->setEndereco($endereco);
$novoCliente->setEmail($email);
$novoCliente->setTelefone($telefone);
$novoCliente->setSenha($senha);

$classCadastroDAO = new ClassCadastroDAO();
if ($acao="cadastrarCliente") {
        $cliente = $classCadastroDAO->cadastrar($novoCliente);
	    if($cliente >= 1){
            header('Location:../view/CadCliente.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../view/CadCliente.php?&MSG= Não foi possivel realizar o cadastro!');
        }
 }

 ?>