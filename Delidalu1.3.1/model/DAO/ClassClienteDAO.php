<?php
require_once 'Conexao.php';

class ClassClienteDAO {

    public function login(ClassCliente $loginCliente) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM cliente WHERE email = ? AND senha = ?";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $loginCliente->getEmail());
            $stmt->bindValue(2, $loginCliente->getSenha());
            $stmt->execute();
            
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $numLinhas = count($resultado);

            if ($numLinhas > 0) {
                return TRUE; 
            } else {
                return false; 
            }
    
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }

    public function cadastrarcliente(ClassCliente $cadastrarCliente){
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO cliente (nome, cpf, endereco, email, telefone, senha) values (?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $cadastrarCliente->getNome());
            $stmt->bindValue(2, $cadastrarCliente->getCpf());
            $stmt->bindValue(3, $cadastrarCliente->getEndereco());
            $stmt->bindValue(4, $cadastrarCliente->getEmail());
            $stmt->bindValue(5, $cadastrarCliente->getTelefone());
            $stmt->bindValue(6, $cadastrarCliente->getSenha());
            
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluircliente (ClassCliente $excluircliente){
        try{
        $pdo = Conexao::getInstance();
        $sql = "DELETE FROM cliente where id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $excluircliente->getExcluirid());
        $stmt->execute();

        return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarcliente (ClassCliente $alterarcliente){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE cliente SET nome=?, CPF=?, endereco=?, email=?, telefone=?, senha=? where id=?";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $alterarcliente->getNome());
            $stmt->bindValue(2, $alterarcliente->getCpf());
            $stmt->bindValue(3, $alterarcliente->getEndereco());
            $stmt->bindValue(4, $alterarcliente->getEmail());
            $stmt->bindValue(5, $alterarcliente->getTelefone());
            $stmt->bindValue(6, $alterarcliente->getSenha());
            $stmt->bindValue(7, $alterarcliente->getNovoid());
            
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

    }
    
    public function cadastrarpedido (ClassCliente $cadastrarPedido){
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO clientepedido (idcliente, idestoque, quantidadepedido, datapedido) values (?,?,?,curdate())";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $cadastrarPedido->getIdcliente());
            $stmt->bindValue(2, $cadastrarPedido->getIdestoque());
            $stmt->bindValue(3, $cadastrarPedido->getQuantidadepedido());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarpedido(){
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

    public function alterarpedido(ClassCliente $alterarpedido){
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
    }
    


}

?>