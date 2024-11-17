<?php
require_once 'Conexao.php';

class ClassEstDAO
{

    public function addProduto(ClassEstoque $addproduto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO estoque (id, imagem, nome, quantidade, preco) values (?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $addproduto->getIdproduto());
            $stmt->bindValue(2, $addproduto->getImagem());
            $stmt->bindValue(3, $addproduto->getNome());
            $stmt->bindValue(4, $addproduto->getQuantidade());
            $stmt->bindValue(5, $addproduto->getPreco());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarProduto()
    {
        try {

            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM estoque";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $produtos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function buscarProduto($id)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM estoque WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarProduto(ClassEstoque $alterarProduto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE estoque SET imagem=?, nome=?, quantidade=?, preco=? where id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $alterarProduto->getImagem());
            $stmt->bindValue(2, $alterarProduto->getNome());
            $stmt->bindValue(3, $alterarProduto->getQuantidade());
            $stmt->bindValue(4, $alterarProduto->getPreco());
            $stmt->bindValue(5, $alterarProduto->getIdproduto());
            $stmt->execute();

            return $stmt->rowCount();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // public function excluirProduto(ClassEstoque $excluirProduto){
    //     try{
    //         $pdo = Conexao::getInstance();
    //         $sql = "DELETE FROM estoque WHERE id =:id";
    //         $stmt = $pdo->prepare($sql);
    //         $stmt->bindValue(':id', $idproduto);
    //         $stmt->execute();
    //         return TRUE;
    //     } catch (PDOException $exc){
    //         echo $exc->getMessage();
    //     }
    // }

}
