<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author 20112144110295
 */
class Produto {

    private $nome;
    private $empresa;
    private $venda;
    private $cpf;
    private $idproduto;

    function __construct($nome, $empresa, $venda, $cpf, $idproduto) {
        $this->nome = $nome;
        $this->empresa = $empresa;
        $this->venda = $venda;
        $this->cpf = $cpf;
        $this->idproduto = $idproduto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function getVenda() {
        return $this->venda;
    }

    public function setVenda($venda) {
        $this->venda = $venda;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getIdproduto() {
        return $this->idproduto;
    }

    public function setIdproduto($idproduto) {
        $this->idproduto = $idproduto;
    }



}

?>
