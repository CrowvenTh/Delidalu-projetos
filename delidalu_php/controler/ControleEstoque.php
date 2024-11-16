<?php 

require_once '../model/ClassEstoque.php';
require_once '../model/DAO/ClassEstDAO.php';

$idproduto = @$_POST['idproduto'];
$imagem = @$_POST['imagem']; //imagem
$nome = @$_POST['nome'];
$quantidade = @$_POST['quantidade'];
$preco = @$_POST['preco'];

$acao = $_GET['ACAO'];

$addproduto = new ClassEstoque();

$addproduto->setIdproduto($idproduto);
$addproduto->setImagem($imagem);
$addproduto->setNome($nome);
$addproduto->setQuantidade($quantidade);
$addproduto->setPreco($preco);

$ClassEstDAO = new ClassEstDAO();

switch($acao){
    case "addProduto":
        $addproduto = $ClassEstDAO->addProduto($addproduto);

        if($addproduto >= 1){
            header('Location:../view/viewProduto/CadProduto.php?&MSG= Produto adicionado com sucesso ao estoque!');
        } else {
            header('Location:../view/viewProduto/CadProduto.php?&MSG= Não foi possivel adicionar produto ao estoque!');
        }

        break;
}
?>