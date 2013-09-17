<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/produto.php';
include 'connctionFactory.inc.php';

class produto {

    public function insertProduto($produto) {
     $conn = get_connection();
         
     $stmt = $conn->prepare("INSERT INTO produto(nome, empresa, venda, descricao, idproduto)" + "VALUES(?, ?, ?, ?, ?)");
        
        $stmt->bindParam (1, $produto->getnome());
        $stmt->bindParam (2, $produto->getempresa());
        $stmt->bindParam (3, $produto->getvenda());      
        $stmt->bindParam (5, $produto->getdescricao());
        $stmt->bindParam (6, $produto-> getidproduto());
       
    }

    public function deleteProduto($produto) {
        
    }

    public function selectProduto($idproduto) {
        
    }

    public function updateAllProduto($idproduto) {
        
    }

    public function selectAllProduto() {
        
    }

}

?>
