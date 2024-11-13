<?php
class ClassCliente
{
    //Cliente//
    private $id;
    private $excluirid;
    private $novoid;
    public  $idatual;
    private $nome;
    private $cpf;
    private $endereco;
    private $email;
    private $telefone;
    private $senha;

    //ClientePedido//
    private $idcliente;
    private $idestoque;
    private $quantidadepedido;
    private $totalpedido;
    private $datapedido;


    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    public function getNovoid() {
        return $this->novoid;
    }

    public function setNovoid($novoid) {
        $this->novoid = $novoid;
    }

    public function getExcluirid() {
        return $this->excluirid;
    }

    public function setExcluirid($excluirid) {
        $this->excluirid = $excluirid;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getCpf(){
        return $this->cpf;
    }

    function setCpf($cpf){
        $this->cpf = $cpf;
    }

    function getEndereco(){
        return $this->endereco;
    }

    function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getSenha(){
        return $this->senha;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }
    
    //functions ClientePedido//

    public function getIdcliente() {
        return $this->idcliente;
    }
    
    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }
    
    public function getIdestoque() {
        return $this->idestoque;
    }
    
    public function setIdestoque($idestoque) {
        $this->idestoque = $idestoque;
    }
    
    public function getQuantidadepedido() {
        return $this->quantidadepedido;
    }
    
    public function setQuantidadepedido($quantidadepedido) {
        $this->quantidadepedido = $quantidadepedido;
    }
    
    public function getTotalpedido() {
        return $this->totalpedido;
    }
    
    public function setTotalpedido($totalpedido) {
        $this->totalpedido = $totalpedido;
    }
    
    public function getDatapedido() {
        return $this->datapedido;
    }
    
    public function setDatapedido($datapedido) {
        $this->datapedido = $datapedido;
    }


}