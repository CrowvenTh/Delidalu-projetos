<?php
require_once 'Conexao.php';

class ClassLoginDAO {

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
}
?>
