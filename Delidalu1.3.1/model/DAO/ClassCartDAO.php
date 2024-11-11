<?php 
require_once 'Conexao.php';

class ClassCartDAO{
        
    public function addCart (ClassCart $addcart){
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO clientepedido (idcliente, idestoque, quantidadepedido, totalpedido, datapedido) values (?,?,?,?,curdate())";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $addcart->getIdcliente());
            $stmt->bindValue(2, $addcart->getIdestoque());
            $stmt->bindValue(3, $addcart->getQuantidadepedido());
            $stmt->bindValue(4, $addcart->getTotalpedido());
            
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listcart(){
        try{

            $pdo = Conexao::getInstance();
            $sql = "SELECT cp.id AS ID, c.nome AS Cliente, c.endereco AS Endereço, e.nome AS Produto, cp.quantidadepedido AS Quantidade, cp.totalpedido AS Total, cp.datapedido AS Data_Pedido FROM clientepedido AS cp
            INNER JOIN cliente AS c ON cp.idcliente = c.id
            INNER JOIN estoque AS e ON cp.idestoque = e.id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $logins = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $logins;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }


    }

    /*public function alterarpedido(ClassCliente $alterarpedido){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE clientepedido SET idestoque=?, idcliente=?, quantidadepedido=? where id=?";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $alterarpedido->getIdestoque());
            $stmt->bindValue(2, $alterarpedido->getIdcliente());
            $stmt->bindValue(3, $alterarpedido->getQuantidadepedido());
            $stmt->bindValue(4, $alterarpedido->getNovoid());
            
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }


    }

    public function excluirpedido (ClassCliente $excluirpedido){
        try{
        $pdo = Conexao::getInstance();
        $sql = "DELETE FROM clientepedido where id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $excluirpedido->getExcluirid());
        $stmt->execute();

        return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    } */
}

?>