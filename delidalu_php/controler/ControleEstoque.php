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
        $alterarProduto = $ClassEstDAO->alterarProduto($produto);

        if ($produto == 1) { //varivael == 1 - referencia do professor 
            header('Location:../index.php?&MSG= Produto alterado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possível alterar o produto!');
        }

}
