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
    private $preco;
    private $descricao;
    private $IdProduto;

    function __construct($nome, $empresa, $preco, $cpf, $idproduto) {
        $this->nome = $nome;
        $this->empresa = $empresa;
        $this->venda = $preco;
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

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    
    }

    public function getIdProduto() {
        return $this->IdProduto;
    }

    public function setIdProduto($IdProduto) {
        $this->IdProduto = $IdProduto;
    }



}

?>
