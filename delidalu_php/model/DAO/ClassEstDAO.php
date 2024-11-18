<?php
require_once 'Conexao.php';

class ClassEstDAO
{

    public function adicionarProduto(ClassEstoque $produto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO estoque (idproduto, imagem, nome, quantidade, preco) values (?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $produto->getIdproduto());
            $stmt->bindValue(2, $produto->getImagem());
            $stmt->bindValue(3, $produto->getNome());
            $stmt->bindValue(4, $produto->getQuantidade());
            $stmt->bindValue(5, $produto->getPreco());
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
    public function buscarProduto($idproduto)
    {
        try {
            $produto = new ClassEstoque();
            $pdo = Conexao::getInstance();
            $sql = "SELECT idproduto, imagem, nome, quantidade, preco WHERE idproduto = :idproduto LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':idproduto', $idproduto);

            $stmt->execute();
            $produtoAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $produto->setIdproduto($produtoAssoc['idproduto']);
            $produto->setImagem($produtoAssoc['imagem']);
            $produto->setQuantidade($produtoAssoc['quantidade']);
            $produto->setPreco($produtoAssoc['preco']);

            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarProduto(ClassEstoque $alterarProduto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE estoque SET imagem=?, nome=?, quantidade=?, preco=? where idproduto=?";
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

}
