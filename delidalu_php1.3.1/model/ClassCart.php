<?php 

class ClassCart{
    private $idcliente;
    private $idestoque;
    private $quantidadepedido;
    private $totalpedido;
    private $datapedido;

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

?>