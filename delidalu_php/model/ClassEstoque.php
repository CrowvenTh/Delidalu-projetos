<?php

class ClassEstoque{
    private $idproduto;
    private $imagem; //link
    private $nome;
    private $quantidade;
    private $preco;

//GETTERS    
    public function getIdproduto(){
        return $this->idproduto;
    }
    // imagem
    public function getImagem(){
        return $this->imagem;
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
    
    // imagem
    public function setImagem($imagem){
        $this->imagem = $imagem;
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