<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once '../src/dominio/Produto.class.php';
    include 'connectionFactory.inc.php';
    
    class ProdutoDao{
        public function insertProduto($produto){
            $conn = get_connection();
            
            $stmt = $conn->prepare("INSERT INTO Produto(nome, empresa, preco, descricao, idProduto)" 
                                   +  "VALUES(?,?,?,?,?)");
            
            $stmt->bindParam(1,$produto->getNome());
            $stmt->bindParam(2,$produto->getEmpresa());
            $stmt->bindParam(3,$produto->getPreco());
            $stmt->bindParam(4,$produto->getDescricao());
            $stmt->bindParam(5,$produto->getIdProduto());
            $stmt->execute();
        }
        
        public function deleteProduto($produto){
            $conn = get_connection();
            
            $stmt = $conn->prepare("DELETE FROM Produto WHERE idProduto = ?");
            
            $stmt->bindParam(1,$produto->getIdProduto());
            $stmt->execute();
        }
        
        public function updateProduto($id, $produto){
            $conn = get_connection();
            
            $sql = "UPDATE Produto SET preco = ? WHERE idProduto = ?";
            
            $stmt = $conn->prepare($sql);
            
            $stmt->bindParam(1,$produto->getPreco());
            $stmt->bindParam(2,$id);
            $stmt->execute();
        }
        
        public function selectProduto($id){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Produto WHERE idProduto = ?";
            
            $stmt = $conn->prepare($sql);
 
            $stmt->bindParam(1,$id);
            $rs = $stmt->query();
            
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo $row->nome ."<br>";
                echo $row->empresa ."<br>";
                echo $row->preco ."<br>";
                echo $row->descricao ."<br>";
            }
        }
        
        public function selectAllProduto(){
            $conn = get_connection();
            
            $sql = "SELECT * FROM Produto";
            
            $stmt = $conn->prepare($sql);
            
            $rs = $stmt->query();
            
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo $row->nome ."<br>";
                echo $row->empresa ."<br>";
                echo $row->preco ."<br>";
                echo $row->descricao ."<br>";
            }
        }
    }
?>
