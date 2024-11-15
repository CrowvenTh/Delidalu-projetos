<?php

class ClassEstoque{
    private $idproduto;
    private $nome;
    private $quantidade;
    private $preco;

//GETTERS    
    public function getIdproduto(){
        return $this->idproduto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getPreco(){
        return $this->preco;
    }

//SETTERS

    public function setIdproduto($idproduto){
        $this->idproduto = $idproduto;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

}


?>