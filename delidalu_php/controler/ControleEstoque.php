<?php

require_once '../model/ClassEstoque.php';
require_once '../model/DAO/ClassEstDAO.php';

$idproduto = @$_POST['idproduto'];
$imagem = @$_POST['imagem'];
$nome = @$_POST['nome'];
$quantidade = @$_POST['quantidade'];
$preco = @$_POST['preco'];

$acao = $_GET['ACAO'];
// $idproduto = $_GET['idproduto'];

$produto = new ClassEstoque();

$produto->setIdproduto($idproduto);
$produto->setImagem($imagem);
$produto->setNome($nome);
$produto->setQuantidade($quantidade);
$produto->setPreco($preco);

$ClassEstDAO = new ClassEstDAO();

switch ($acao) {
    case "adicionarProduto":
        $produto = $ClassEstDAO->adicionarProduto($produto);

        if ($produto >= 1) {
            header('Location:../view/viewProduto/CadProduto.php?&MSG= Produto adicionado com sucesso ao estoque!');
        } else {
            header('Location:../view/viewProduto/CadProduto.php?&MSG= Não foi possivel adicionar produto ao estoque!');
        }

        break;

    case 'alterarProduto':
        $produto = $ClassEstDAO->alterarProduto($produto);

        if ($produto == 1) { //varivael == 1 - referencia do professor 
            header('Location:../view/viewProduto/Produto.php?&MSG= Produto alterado com sucesso!');
        } else {
            header('Location:../view/viewProduto/Produto.php?&MSG= Não foi possível alterar o produto!');
        }
        break;
        
    case "excluirProduto":
        if(isset($_GET['idproduto'])){
            $idproduto = $_GET['idproduto'];
            $ClassEstDAO = new ClassEstDAO();
            $pr = $ClassEstDAO->excluirproduto($idproduto);
            if($pr == TRUE){
                header('Location:../view/viewProduto/Produto.php?&MSG= Produto excluído com sucesso!');
            } else {
                header('Location:../view/viewProduto/Produto.php?&MSG= Não foi possível excluir o produto!');
            }
        }
        break;
}
