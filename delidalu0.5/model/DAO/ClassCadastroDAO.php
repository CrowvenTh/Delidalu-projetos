<?php
require_once 'Conexao.php';
class ClassCadastroDAO
{
    public function cadastrar(ClassCliente $cadastrarCliente)
    {
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
    


}