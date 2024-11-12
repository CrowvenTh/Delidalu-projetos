<?php 

require_once '../model/ClassEstoque.php';
require_once '../model/DAO/ClassEstDAO.php';

$idproduto = @$_POST['idproduto'];
$nome = @$_POST['nome'];
$tipo = @$_POST['tipo'];
$quantidade = @$_POST['quantidade'];
$preco = @$_POST['preco'];

$acao = $_GET['ACAO'];

$addproduto = new ClassEstoque();

$addproduto->setIdproduto($idproduto);
$addproduto->setNome($nome);
$addproduto->setTipo($tipo);
$addproduto->setQuantidade($quantidade);
$addproduto->setPreco($preco);

$ClassEstDAO = new ClassEstDAO();

switch($acao){
    case "addProduto":
        $addproduto = $ClassEstDAO->addProduto($addproduto);

        if($addproduto >= 1){
            header('Location:../view/CadProduto.php?&MSG= Produto adicionado com sucesso ao estoque!');
        } else {
            header('Location:../view/CadProduto.php?&MSG= Não foi possivel adicionar produto ao estoque!');
        }

        break;
}
?>