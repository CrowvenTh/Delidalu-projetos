<?php
require_once 'Conexao.php';

class ClassClienteDAO {

    public function login(ClassCliente $loginCliente) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM cliente WHERE email = '?' AND senha = ?";
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

    public function cadastrar(ClassCliente $cadastrarCliente){
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


}

?>