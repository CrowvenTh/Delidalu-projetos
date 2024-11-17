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

$addproduto = new ClassEstoque();

$addproduto->setIdproduto($idproduto);
$addproduto->setImagem($imagem);
$addproduto->setNome($nome);
$addproduto->setQuantidade($quantidade);
$addproduto->setPreco($preco);

$ClassEstDAO = new ClassEstDAO();

switch ($acao) {
    case "addProduto":
        $addproduto = $ClassEstDAO->addProduto($addproduto);

        if ($addproduto >= 1) {
            header('Location:../view/viewProduto/CadProduto.php?&MSG= Produto adicionado com sucesso ao estoque!');
        } else {
            header('Location:../view/viewProduto/CadProduto.php?&MSG= Não foi possivel adicionar produto ao estoque!');
        }

        break;

    case 'alterarProduto':
        $alterarProduto = $ClassEstDAO->alterarProduto($addproduto);

        if ($addproduto >= 1) {
            header('Location:../index.php?&MSG= Produto alterado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possível alterar o produto!');
        }

    // case 'excluirProduto':
    //     $excluirProduto = $ClassEstDAO->excluirProduto($addproduto);

    //     if ($excluirProduto >= 1) {
    //         header('Location:../index.php?&MSG= Produto excluido com sucesso!');
    //     } else {
    //         header('Location:../index.php?&MSG= Não foi possível exlucir o produto!!');
    //     }
    //     break;
}
