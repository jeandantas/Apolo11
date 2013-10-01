<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author 20111144110106
 */
class Cliente {
    private $nome;
    private $sobrenome;
    private $cpf;
    private $email;
    private $endereco;
    private $senha;
    private $idCliente;
    private $ehVisitante;
    
    function __construct($nome, $sobrenome, $cpf, $email, $endereco, $senha, $idCliente, $ehVisitante) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->senha = $senha;
        $this->idCliente = $idCliente;
        $this->ehVisitante = $ehVisitante;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function getEhVisitante() {
        return $this->ehVisitante;
    }

    public function setEhVisitante($ehVisitante) {
        $this->ehVisitante = $ehVisitante;
    }


}

?>
