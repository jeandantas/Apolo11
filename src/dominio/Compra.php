<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compra
 *
 * @author 20111144110106
 */
class Compra {
    private $compra;
    private $data;
    private $hora;
    private $formaPagamento;
    private $descricao;
    private $idCliente;
  
    function __construct($compra, $data, $hora, $formaPagamento, $descricao, $idCliente) {
        $this->compra = $compra;
        $this->data = $data;
        $this->hora = $hora;
        $this->formaPagamento = $formaPagamento;
        $this->descricao = $descricao;
        $this->idCliente = $idCliente;
    }
    public function getCompra() {
        return $this->compra;
    }

    public function setCompra($compra) {
        $this->compra = $compra;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getFormaPagamento() {
        return $this->formaPagamento;
    }

    public function setFormaPagamento($formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }
}

?>
