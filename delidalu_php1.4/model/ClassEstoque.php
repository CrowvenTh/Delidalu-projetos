<?php

class ClassEstoque{
    private $idproduto;
    private $nome;
    private $tipo;
    private $quantidade;
    private $preco;

//GETTERS    
    public function getIdproduto(){
        return $this->idproduto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTipo(){
        return $this->tipo;
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

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

}


?>