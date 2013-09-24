<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once '../src/dominio/Compra.class.php';
    include 'connectionFactory.inc.php';
    
    Class CompraDao{
        public function insertCompra($compra){
            $conn = get_connection();
            
            $stmt = $conn->prepare("INSERT INTO compra(data, hora, formaPagamento, descricao, idCliente, idCompra)" 
                                   +  "VALUES(?,?,?,?,?,?)");
            
            $stmt->bindParam(1,$compra->getData());
            $stmt->bindParam(2,$compra->getHora());
            $stmt->bindParam(3,$compra->getFormaPagamento());
            $stmt->bindParam(4,$compra->getDescricao());
            $stmt->bindParam(5,$compra->getIdCliente());
            $stmt->bindParam(6,$compra->getIdCompra());
            $stmt->execute();
        }
        
        public function deleteCompra($cliente){
            
        }
    }
?>
