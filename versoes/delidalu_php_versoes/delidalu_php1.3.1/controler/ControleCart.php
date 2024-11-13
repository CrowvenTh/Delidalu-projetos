<?php 

    require_once '../model/ClassCart.php';
    require_once '../model/DAO/ClassCartDAO.php';

    $idcliente =@$_POST['idcliente'];
    $idestoque =@$_POST['idestoque'];
    $quantidadepedido =@$_POST['quantidadepedido'];
    $totalpedido =@$_POST['totalpedido'];
    $datapedido =@$_POST['datapedido'];

    $acao = $_GET['ACAO'];

    $addcart = new ClassCart();

    $addcart->setIdcliente($idcliente);
    $addcart->setIdestoque($idestoque);
    $addcart->setQuantidadepedido($quantidadepedido);
    $addcart->setTotalpedido($totalpedido);
    $addcart->setDatapedido($datapedido);

    $ClassCartDAO = new ClassCartDAO();

    switch($acao) {
        case "addCart":
            $addcart = $ClassCartDAO->addCart($addcart);

            if($add >= 1){
                header('Location:../view/Produto.php?&MSG= Produto adicionado com sucesso ao carrinho!');
            } else {
                header('Location:../view/Produto.php?&MSG= Não foi possivel adicionar produto ao carrinho!');
            }
    }
?>