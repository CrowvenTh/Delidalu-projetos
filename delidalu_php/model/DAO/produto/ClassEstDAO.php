<?php 
require_once 'Conexao.php';

class ClassEstDAO{
        
    public function addProduto(ClassEstoque $addproduto){
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO estoque (id, nome, quantidade, preco) values (?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $addproduto->getIdproduto());
            $stmt->bindValue(2, $addproduto->getNome());
            $stmt->bindValue(3, $addproduto->getQuantidade());
            $stmt->bindValue(4, $addproduto->getPreco());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}

?>