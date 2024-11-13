<?php
class ClassCliente
{
    private $id;
    private $nome;
    private $cpf;
    private $endereco;
    private $email;
    private $telefone;
    private $senha;

    function getIdCliente()
    {
        return $this->id;
    }

    function setIdCliente($id)
    {
        $this->id = $id;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getEndereco()
    {
        return $this->endereco;
    }

    function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }


}
