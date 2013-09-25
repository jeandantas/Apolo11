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
            
            $stmt = $conn->prepare("INSERT INTO Compra(data, hora, formaPagamento, descricao, idCliente, idCompra)" 
                                   +  "VALUES(?,?,?,?,?,?)");
            
            $stmt->bindParam(1,$compra->getData());
            $stmt->bindParam(2,$compra->getHora());
            $stmt->bindParam(3,$compra->getFormaPagamento());
            $stmt->bindParam(4,$compra->getDescricao());
            $stmt->bindParam(5,$compra->getIdCliente());
            $stmt->bindParam(6,$compra->getIdCompra());
            $stmt->execute();
        }
        
        public function deleteCompra($compra){
            $conn = get_connection();
            
            $stmt = $conn->prepare("DELETE FROM Compra WHERE idCompra = ?");
            
            $stmt->bindParam(1,$compra->getIdCompra());
            $stmt->execute();
        }
        
        public function updateCompra($id, $compra){
            $conn = get_connection();
            
            $sql = "UPDATE Compra SET descricao = ? WHERE idCompra = ?";
            
            $stmt = $conn->prepare($sql);
            
            $stmt->bindParam(1,$compra->getDescricao());
            $stmt->bindParam(2,$id);
            $stmt->execute();
        }
        
        public function selectCompra($id){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Compra WHERE idCompra = ?";
            
            $stmt = $conn->prepare($sql);
 
            $stmt->bindParam(1,$id);
            $rs = $stmt->query();
            
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo $row->data ."<br>";
                echo $row->hora ."<br>";
                echo $row->formaPagamento ."<br>";
                echo $row->descricao ."<br>";
            }
        }
        
        public function selectAllCliente(){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Compra";
            
            $stmt = $conn->prepare($sql);
            
            $rs = $stmt->query();
            
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo $row->data ."<br>";
                echo $row->hora ."<br>";
                echo $row->formaPagamento ."<br>";
                echo $row->descricao ."<br>";
            }
        }
    }
?>
